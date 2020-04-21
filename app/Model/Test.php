<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['lesson', 'start_at', 'finish_at','user_id'];

    public function users()
    {
        return $this->hasMany('App/User');
    }
}
