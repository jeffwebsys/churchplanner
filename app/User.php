<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','approved_at'
    ];

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
    // roles
    public function home()
	{

       
		return [
			'admin' => '/admin',
			'user' => '/home'
        ][$this->role];
        
    }
    public function announcements(){

        return $this->hasMany(Announcement::class);
    }
    public function devotions(){

        return $this->hasMany(Devotion::class);
    }

    public function profile(){

        return $this->hasOne(Profile::class);
    }
}
