<?php

use Illuminate\Database\Seeder;
use App\Score;
use App\User;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add the scores
        $scores = [
            [99, 45, 'nastygirl@sample.net'],
            [33, 13, 'carlosdanger@sample.net'],
            [4, 1, 'woopig@sample.net'],
            [26, 22, 'lost1@sample.net'],
            [8, 10, 'unknown@sample.net'],
            [74, 29, 'nastygirl@sample.net'],
            [42, 23, 'lost1@sample.net'],
            [1, 0, 'woopig@sample.net'],
            [11, 5, 'unknown@sample.net'],
            [18, 9, 'bigdawgeats@sample.net']
        ];


        $count = count($scores);

        foreach ($scores as $key => $score) {

            $user_id = User::where('email', '=', $score[2])->pluck('id')->first();

            Score::insert([
                'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'anxiety' => $score[0],
                'depression' => $score[1],
                'alevel' => 'mild',
                'dlevel' => 'mild',
                'user' => $score[2],
                'user_id' => $user_id
            ]);
            $count--;
        }
    }
}
