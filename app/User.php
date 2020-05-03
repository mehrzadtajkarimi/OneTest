<?php

namespace App;

use App\Model\Test;
use App\Model\Reply;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'user_name',
    //     'name',
    //     'family',
    //     'father_name',
    //     'about',
    //     'profile_image',
    //     'nationalCode',
    //     'mobile',
    //     'email',
    //     'password',
    // ];
    protected $guarded = ['id'];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //ذخیره همه پسورد ها به هش
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @method tests() 
     */
    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}