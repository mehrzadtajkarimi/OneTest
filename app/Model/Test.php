<?php

namespace App\Model;

use App\User;
use App\Model\Entity;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // protected $fillable = ['lesson', 'start_at', 'finish_at','user_id'];
    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    // public function getSumMarkAttribute()
    // {

    // }
}