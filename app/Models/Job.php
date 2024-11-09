<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name'=> $name]);
        $this->tags()->attach($tag);
    }

}
