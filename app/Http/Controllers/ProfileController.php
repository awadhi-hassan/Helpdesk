<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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

            dd($ext);
        }

    }

    public function show(Profile $profile)
    {
        return view('profile.update', ['profile' => $profile]);
    }
}
