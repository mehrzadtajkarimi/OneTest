<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{

    // protected $fillable = ['region','school','grade','class'];
    protected $guarded = ['id'];


    public  function tests()
    {
        return $this->hasMany('App\Model\Test');//تعداد زیادی آزمون وجود دارد
    }
}