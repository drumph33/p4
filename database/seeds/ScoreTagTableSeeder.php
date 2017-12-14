<?php

use Illuminate\Database\Seeder;
use App\Score;
use App\Tag;

class ScoreTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $scores =[
            2 => ['diet', 'family'],
            3 => ['weekend', 'exercise', 'weather'],
            4 => ['finances', 'alcohol'],
            5 => ['family', 'exercise'],
            6 => ['job', 'alcohol', 'weather'],
            7 => ['relationship', 'finances', 'family'],
            8 => ['relationship', 'family', 'finances', 'holiday'],
            9 => ['diet', 'weekend', 'weather'],
            10 => ['alcohol', 'job']
        ];

        foreach ($scores as $id => $tags) {

        # First get the book
        $score = Score::where('id', 'LIKE', $id)->first();


        # Now loop through each tag for this book, adding the pivot
            foreach ($tags as $tagName) {
                $tag = Tag::where('name', 'LIKE', $tagName)->first();
                dd($tag);
            # Connect this tag to this book
                $score->tags()->save($tag);
            }
        }
    }
}
