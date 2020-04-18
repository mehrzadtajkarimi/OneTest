<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['lesson','class','grade','school','region','time'];
}