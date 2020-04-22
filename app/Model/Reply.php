<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // protected $fillable = ['status','answer'];
    protected $guarded = ['id'];

    public function questions()
    {
        return $this->belongsTo('App\Model\Question');//متعلق است به سوال
    }

}