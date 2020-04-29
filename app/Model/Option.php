<?php

namespace App\Model;

use App\Model\Reply;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    // protected $fillable = ['status','answer'];
    protected $guarded = ['id'];

    public function question()
    {
        return $this->belongsTo(Question::class); //متعلق است به سوال
    }

    public function reply()
    {
        return $this->hasOne(Reply::class); //متعلق است به سوال
    }
}