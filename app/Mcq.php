<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Answer;

class Mcq extends Model
{
    protected $guarded=[];

    public function question()
    {
        return $this->belongTo(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
