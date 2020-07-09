<?php


namespace App;


trait followable
{

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
//        if ($this->following($user)) {
//            return $this->unfollow($user);
//        }
//        $this->follow($user);
//        OR
        $this->follows()->toggle($user);
    }

    public function following(User $user)
    {
        // if the collection is samll you can do the following
//        return $this->follows->contains($user);
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'following_user_id');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'follows', 'following_user_id','user_id');
    }
}
