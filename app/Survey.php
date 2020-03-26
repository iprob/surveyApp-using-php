<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Response;
use App\Question;

class Survey extends Model
{
    protected $guarded=[];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
