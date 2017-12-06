<?php

use Illuminate\Database\Seeder;
use App\Score;

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
            [74, 29, 'nastygirl'],
            [42, 23, 'lost1@sample.net'],
            [1, 0, 'woopig@sample.net'],
            [11, 5, 'unknown@sample.net'],
            [18, 9, 'bigdawgeats@sample.net']
        ];

        $count = count($scores);

        foreach ($scores as $key => $score) {
            Score::insert([
                'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'anxiety' => $score[0],
                'depression' => $score[1],
                'user' => $score[2]
            ]);
            $count--;
        }
    }
}
