<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function scores()
    {
        return $this->belongsToMany('App\Score')->withTimestamps();
    }
    public static function getForCheckboxes()
    {
        $tags = Tag::orderBy('name')->get();

        $tagsForCheckboxes = [];

        foreach ($tags as $tag) {
            $tagsForCheckboxes[$tag['id']] = $tag->name;
        }

        return $tagsForCheckboxes;
    }
}
