<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{

 public function run()
 {
     $tags = ['weekend', 'job', 'relationship', 'exercise', 'family', 'holiday', 'diet', 'alcohol', 'finances', 'weather'];

     foreach ($tags as $tagName) {
         $tag = new Tag();
         $tag->name = $tagName;
         $tag->save();
     }
 }
}
