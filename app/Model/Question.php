<?php

namespace App\Model;

use App\Model\Test;
use App\Model\Reply;
use App\Model\Option;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // protected $fillable = ['mark','question','test_id','region','school','grade','class',];
    protected $guarded = ['id'];
    public function tests()
    {
        return $this->belongsTo(Test::class,'test_id');
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
    public function reply()
    {
        return $this->hasOne(Reply::class);
    }
}