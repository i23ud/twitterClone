<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'body' => 'required|max:280'
            ]
        );
        auth()->user()->tweets()->create($attributes);
        return redirect(route('home'))->with('message', 'Your Post was sent.');
    }

    public function show(Tweet $tweet)
    {
        //
    }

    public function edit(Tweet $tweet)
    {
        //
    }

    public function update(Request $request, Tweet $tweet)
    {
        //
    }

    public function destroy(Tweet $tweet)
    {
        //
    }
}
