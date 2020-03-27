<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Survey;

class Response extends Model
{
    protected $guarded=[];
    
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
