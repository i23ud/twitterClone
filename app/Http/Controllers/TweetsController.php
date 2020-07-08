<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index()
    {
        $tweets = auth()->user()->timeline();
        return view('tweets.index', compact('tweets'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'body' => 'required|max:255'
            ]
        );
        auth()->user()->tweets()->create($attributes);

        return redirect(route('home'));
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
