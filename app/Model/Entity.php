<?php

namespace App\Model;

use App\Model\Test;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{

    // protected $fillable = ['region','school','grade','class'];
    protected $guarded = ['id'];


    public  function tests()
    {
        return $this->hasMany(Test::class);//تعداد زیادی آزمون وجود دارد
    }
}