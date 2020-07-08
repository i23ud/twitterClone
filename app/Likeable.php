<?php


namespace App;


trait Likeable
{

    public function isDislikedBy($user)
    {
        return (bool)$user->likes
            ->where('user_id', $user->id)
            ->where('liked', false)
            ->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLikedBy($user)
    {
        return (bool)$user->likes
            ->where('user_id', $user->id)
            ->where('liked', true)
            ->count();
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id,
            ],
            [
                'liked' => $liked,
            ]
        );
    }
}
