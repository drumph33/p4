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

        $valid = $request->validate([
        'A1' => 'required',
        'A2' => 'required',
        'A3' => 'required',
        'A4' => 'required',
        'A5' => 'required',
        'A6' => 'required',
        'A7' => 'required',
        'A8' => 'required',
        'A9' => 'required',
        'A10' => 'required',
        'A11' => 'required',
        'A12' => 'required',
        'A13' => 'required',
        'A14' => 'required',
        'A15' => 'required',
        'A16' => 'required',
        'A17' => 'required',
        'A18' => 'required',
        'A19' => 'required',
        'A20' => 'required',
        'A21' => 'required',
        'A22' => 'required',
        'A23' => 'required',
        'A24' => 'required',
        'A25' => 'required',
        'A26' => 'required',
        'A27' => 'required',
        'A28' => 'required',
        'A29' => 'required',
        'A30' => 'required',
        'A31' => 'required',
        'A32' => 'required',
        'A33' => 'required',
        'D1' => 'required',
        'D2' => 'required',
        'D3' => 'required',
        'D4' => 'required',
        'D5' => 'required',
        'D6' => 'required',
        'D7' => 'required',
        'D8' => 'required',
        'D9' => 'required',
        'D10' => 'required',
        'D11' => 'required',
        'D12' => 'required',
        'D13' => 'required',
        'D14' => 'required',
        'D15' => 'required'
        ]);

        foreach($valid as $key => $value){
            switch ($key){
                case 'A1':
                    $ascore += $value;
                    break;
                case 'A2':
                    $ascore += $value;
                    break;
                case 'A3':
                    $ascore += $value;
                    break;
                case 'A3':
                    $ascore += $value;
                    break;
                case 'A4':
                    $ascore += $value;
                    break;
                case 'A5':
                    $ascore += $value;
                    break;
                case 'A6':
                    $ascore += $value;
                    break;
                case 'A7':
                    $ascore += $value;
                    break;
                case 'A8':
                    $ascore += $value;
                    break;
                case 'A9':
                    $ascore += $value;
                    break;
                case 'A10':
                    $ascore += $value;
                    break;
                case 'A11':
                    $ascore += $value;
                    break;
                case 'A12':
                    $ascore += $value;
                    break;
                case 'A13':
                    $ascore += $value;
                    break;
                case 'A14':
                    $ascore += $value;
                    break;
                case 'A15':
                    $ascore += $value;
                    break;
                case 'A16':
                    $ascore += $value;
                    break;
                case 'A17':
                    $ascore += $value;
                    break;
                case 'A18':
                    $ascore += $value;
                    break;
                case 'A19':
                    $ascore += $value;
                    break;
                case 'A20':
                    $ascore += $value;
                    break;
                case 'A21':
                    $ascore += $value;
                    break;
                case 'A22':
                    $ascore += $value;
                    break;
                case 'A23':
                    $ascore += $value;
                    break;
                case 'A24':
                    $ascore += $value;
                    break;
                case 'A24':
                    $ascore += $value;
                    break;
                case 'A25':
                    $ascore += $value;
                    break;
                case 'A26':
                    $ascore += $value;
                    break;
                case 'A27':
                    $ascore += $value;
                    break;
                case 'A28':
                    $ascore += $value;
                    break;
                case 'A29':
                    $ascore += $value;
                    break;
                case 'A30':
                    $ascore += $value;
                    break;
                case 'A31':
                    $ascore += $value;
                    break;
                case 'A32':
                    $ascore += $value;
                    break;
                case 'A33':
                    $ascore += $value;
                    break;
                case 'D1':
                    $dscore += $value;
                    break;
                case 'D2':
                    $dscore += $value;
                    break;
                case 'D3':
                    $dscore += $value;
                    break;
                case 'D4':
                    $dscore += $value;
                    break;
                case 'D5':
                    $dscore += $value;
                    break;
                case 'D6':
                    $dscore += $value;
                    break;
                case 'D7':
                    $dscore += $value;
                    break;
                case 'D8':
                    $dscore += $value;
                    break;
                case 'D9':
                    $dscore += $value;
                    break;
                case 'D10':
                    $dscore += $value;
                    break;
                case 'D11':
                    $dscore += $value;
                    break;
                case 'D12':
                    $dscore += $value;
                    break;
                case 'D13':
                    $dscore += $value;
                    break;
                case 'D14':
                    $dscore += $value;
                    break;
                case 'D15':
                    $dscore += $value;
                    break;
                }
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
