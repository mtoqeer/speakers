<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // Relations

    public function articles()
    {
        return $this->hasMany('App\Articles');
    }

    public function available_for()
    {
        return $this->hasOne('App\Available_for');
    }

    public function award()
    {
        return $this->hasMany('App\Award');
    }

    public function book()
    {
        return $this->hasMany('App\Book');
    }

    public function current_position()
    {
        return $this->hasMany('App\Current_position');
    }

    public function degree()
    {
        return $this->hasMany('App\Degree');
    }

    public function Expertise()
    {
        return $this->belongsToMany('App\Expertise');
    }

    public function image()
    {
        return $this->hasMany('App\Image');
    }

    public function past_talk()
    {
        return $this->hasMany('App\Past_talk');
    }

    public function presentations()
    {
        return $this->hasMany('App\Presentation');
    }

    public function social_media_account()
    {
        return $this->hasOne('App\Social_media_account');
    }

    public function video()
    {
        return $this->hasMany('App\Video');
    }

    public function workshop()
    {
        return $this->hasMany('App\Workshop');
    }

    public function achievement()
    {
        return $this->hasMany('App\Achievement');
    }

    public function user_meta()
    {
        return $this->hasOne('App\User_meta');
    }


    // Relations End

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','featured',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
