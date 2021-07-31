<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }

    public function update(Profile $profile)
    {        
        if (request('avatar')){

            $ext = request('avatar')->extension();
            $path = request('avatar')->storeAs('avatars', request()->user()->username.'.'.$ext);
            //dd(storage_path('app/'.$path));
            $avatar = Image::make(storage_path('app/'.$path))->fit(1000, 1000);
            $avatar->save();
        }

        Auth::user()->profile->update([
            'avatar' => $path,
        ]);

        

    }

    public function show(Profile $profile)
    {
        return view('profile.update', ['profile' => $profile]);
    }
}
