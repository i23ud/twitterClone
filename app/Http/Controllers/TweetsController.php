<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
                'body' => 'required|max:280',
                'image' => 'nullable|image'
            ]
        );

        if (request('image')) {
            $imagePath = request('image')->store('avatars');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(400);
            $image->save();
//            $imageArray = ['image' => $imagePath];
            $attributes['image'] = $imagePath;
        }
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

    public function destroy($id)
    {
        $tweet = Tweet::findOrFail($id);
        abort_if(auth()->user()->id !== $tweet->user->id, 403);
        $tweet->delete();
        return back()->with('message', 'Your tweet deleted successfully');
    }
}
