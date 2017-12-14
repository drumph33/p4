<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Score;
use App\Tag;

class ScoreController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            return view('home');
        }
        else{
            return view('index');
        }
    }
    public function form()
    {
        return view('form');
    }
    public function view($id)
    {
        $score = Score::with('tags')->find($id);

        if (empty($score->toArray())) {
            return redirect('/home')->with('alert', 'Score not found');
        }

        $tagsForThisScore = [];
        foreach ($score->tags as $tag) {
            $tagsForThisScore[] = $tag->name;
        }

        return view('view')->with([
            'scores' => $score,
            'tagsForThisScore' => $tagsForThisScore
        ]);
    }
    public function results(Request $request)
    {
        $results = [];
        $ascore = 0;
        $dscore =0;
        $alevel = '';
        $dlevel = '';


            /*
             * Create array of required fields for anxiety checklist
             * keys = a1, a2, a3, ..., a33 => values = 'required'
            */
            $anxietyFields = array_fill(1,33,'required');
            foreach ($anxietyFields as $key => $value) {
                $anxietyFields['A'.$key] = $value;
                unset($anxietyFields[$key]);
            }

            /*
             * Create array of required fields for depression checklist
             * keys = d1, d2, d3, ..., d33 => values = 'required'
            */
            $depressionFields = array_fill(1,15,'required');
            foreach ($depressionFields as $key => $value) {
                $depressionFields['D'.$key] = $value;
                unset($depressionFields[$key]);
            }

            // Merge $anxietyFields and $depressionFields
            $requiredFields = array_merge($anxietyFields, $depressionFields);

            // Form validation
            $valid = $request->validate($requiredFields);

            // Separate into 2 arrays for anxiety and depression
            $anxietyScores = array_slice($valid,0,32);
            $depressionScores = array_slice($valid,33,47);

            // Sum up anxiety scores. Store in $ascore
            foreach($anxietyScores as $key => $value) {
                $ascore += $value;
            }

            // Sum up depression scores. Store in $dscore
            foreach($depressionScores as $key => $value) {
                $dscore += $value;
            }

            if($ascore <= 4){
                $alevel = 'minimal or no anxiety';
            }
            elseif($ascore <= 10){
                $alevel = 'morderline anxiety';
            }
            elseif($ascore <= 20){
                $alevel = 'mild anxiety';
            }
            elseif($ascore <= 30){
                $alevel = 'moderate anxiety';
            }
            elseif($ascore <= 50){
                $alevel = 'severe anxiety';
            }else{
                $alevel = 'extreme anxiety or panic';
            }

            if($dscore <= 4){
                $dlevel = 'minimal or no depression';
            }
            elseif($dscore <= 10){
                $dlevel = 'borderline depression';
            }
            elseif($dscore <= 20){
                $dlevel = 'mild depression';
            }
            elseif($dscore <= 30){
                $dlevel = 'moderate depression';
            }
            else{
                $dlevel = 'severe depression';
            }

            $results = [
                'anxiety'=>$ascore,
                'depression'=>$dscore,
                'alevel'=>$alevel,
                'dlevel'=>$dlevel
            ];

            $tagsForCheckboxes = Tag::getForCheckboxes();

            return view('results')->with([
                'data' => $results,
                'tagsForCheckbox' => $tagsForCheckboxes
            ]);
        }
        public function show()
        {
            $user = Auth::user();
            $score = Score::with('tags')->where('user_id', '=', $user->id)->get();

            $tagsForCheckboxes = Tag::getForCheckboxes();

            $tagsForThisScore = [];

            if (empty($score->toArray())) {
                return redirect('/home')->with('alert', 'You do not have any scores!');
            }

            return view('scores')->with([
                'scores' => $score,
                'tagsForCheckbox' => $tagsForCheckboxes,
                'tagsForThisScore' => $tagsForThisScore
            ]);
        }
        public function edit($id)
        {
            $score = Score::with('tags')->find($id);

            $tagsForCheckboxes = Tag::getForCheckboxes();

            if (empty($score->toArray())) {
                return redirect('/home')->with('alert', 'Could not find score');
            }

            $tagsForThisScore = [];
            foreach ($score->tags as $tag) {
                $tagsForThisScore[] = $tag->name;
            }

            return view('edit')->with([
                'scores' => $score,
                'tagsForCheckbox' => $tagsForCheckboxes,
                'tagsForThisScore' => $tagsForThisScore
            ]);
        }
        public function delete($id)
        {
            $score = Score::find($id);

            if (empty($score->toArray())) {
                return redirect('/home')->with('alert', 'Score not found');
            }

            $score->tags()->detach();

            $score->delete();

            return redirect('/home')->with('alert', 'Score was removed.');
        }
        public function store(Request $request, $a, $d)
        {
            $score = new Score();
            $score->anxiety = $a;
            $score->depression = $d;
            $score->user = $request->user();
            $score->user_id = $request->user()->id;

            $score->save();

            $score->tags()->sync($request->input('tags'));

            return redirect('/home')->with('alert', 'The score was added.');
        }
        public function update(Request $request, $id)
        {
            $this->validate($request, [
                'anxiety' => 'required|min:0|max:99',
                'depression' => 'required|min:0|max:45'
            ]);

            $score = Score::find($id);

            $score->anxiety = $request->input('anxiety');
            $score->depression = $request->input('depression');

            $score->save();

            $score->tags()->sync($request->input('tags'));

            return redirect('/home')->with('alert', 'The score was updated.');
        }

}
