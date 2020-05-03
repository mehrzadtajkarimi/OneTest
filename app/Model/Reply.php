<?php

namespace App\Model;

use App\User;
use App\Model\Test;
use App\Model\Option;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // protected $fillable = ['status','answer'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
    public function test()
    {
        return $this->belongsTo(Test::class);
    }


}