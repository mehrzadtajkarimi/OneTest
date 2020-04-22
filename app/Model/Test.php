<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // protected $fillable = ['lesson', 'start_at', 'finish_at','user_id'];
    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo('App\User');//متعلق است به کاربر
    }
    public function entity()
    {
        return $this->belongsTo('App\Model\Entity');// آزمون متعلق است به موجودیت
    }
    public function questions()
    {
        return $this->hasMany('App\Model\Question');//تعداد زیادی سوال وجود دارد
    }
}