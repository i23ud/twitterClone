<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
//        abort_if($user->isNot(auth()->user()), 403); without Policy
//        with Policy the following
        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'avatar' => 'file',
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if (request('avatar')) {
            $imagePath = request('avatar')->store('avatars');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(300);
            $image->save();
            $imageArray = ['avatar' => $imagePath];
        }
        $user->update(array_merge(
            $attributes,
            $imageArray ?? []
        ));
        return redirect("/profiles/$user->username");
    }

    public function destroy(Profile $profile)
    {
        //
    }
}
