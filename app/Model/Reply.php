<?php

namespace App\Model;

use App\User;
use App\Model\Option;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // protected $fillable = ['status','answer'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }

}