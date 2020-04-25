<?php

namespace App\Model;

use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // protected $fillable = ['status','answer'];
    protected $guarded = ['id'];

    public function questions()
    {
        return $this->belongsTo(Question::class);//متعلق است به سوال
    }

}