<?php


namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

trait Likeable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
//            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id', // not working with postGresql
            'select tweet_id, ' .
            DB::raw('count(*) filter (where "liked") as likes') .
            ', '
            . DB::raw('count(*) filter (where not "liked") as dislikes') .
            ' from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }
    public function toggleLikeButtons()
    {
        $this->likes()->toggle();
    }

    public function isLikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }

    public function isDislikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }

    public function unlike(?User $user = null)
    {
        $this->likes->where('user_id', $user->id ?? auth()->id())->first()->delete();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }
}
