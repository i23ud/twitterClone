<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'avatar', 'banner', 'date_of_birth' , 'description'
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

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        $friends->push($this->id);
        return Tweet::query()->whereIn('user_id', $friends)->withLikes()->latest()->paginate(50);
    }

    public function getAvatarAttribute($value)
    {
        return asset($value ?: '/images/default-image.png');
    }

    public function getBannerAttribute($value)
    {
        return asset($value ?: '/images/banner.jpg');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function tweets()
    {
        return $this->hasMany('App\Tweet')->latest();
    }
}
