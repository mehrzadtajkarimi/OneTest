<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // protected $fillable = ['mark','question','test_id','region','school','grade','class',];
    protected $guarded = ['id'];


    public function tests()
    {
        return $this->belongsTo('App\Model\Test');//سوال متعلق است به آزمون
    }



    public function replies()
    {
        return $this->hasMany('App\Model\Reply');//تعداد زیادی پاسخ موجود است
    }
}