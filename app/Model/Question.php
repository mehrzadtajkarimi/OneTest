<?php

namespace App\Model;

use App\Model\Test;
use App\Model\Reply;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // protected $fillable = ['mark','question','test_id','region','school','grade','class',];
    protected $guarded = ['id'];


    public function tests()
    {
        return $this->belongsTo(Test::class,'test_id');//سوال متعلق است به آزمون
    }



    public function replies()
    {
        return $this->hasMany(Reply::class);//تعداد زیادی پاسخ موجود است
    }
}
