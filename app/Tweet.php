<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likeable;

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        return $value ? asset($value) : '';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
