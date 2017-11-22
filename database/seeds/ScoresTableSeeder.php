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
            [99, 45],
            [33, 13],
            [4, 1],
            [26, 22],
            [8, 10],
            [74, 29],
            [42, 23],
            [1, 0],
            [11, 5],
            [18, 9]
        ];

        $count = count($scores);

        foreach ($scores as $key => $score) {
            Score::insert([
                'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'date' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
                'anxiety' => $score[0],
                'depression' => $score[1]
            ]);
            $count--;
        }
    }
}
