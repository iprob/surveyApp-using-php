<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Mcq;
use App\Survey;

class Question extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mcq()
    {
        return $this->hasMany(Mcq::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}
