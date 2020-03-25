<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mcq;

class Answer extends Model
{
    
    protected $guarded=[];

    public function mcq()
    {
        return $this->belongsTo(Mcq::class);
    }
}
