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
    }
        

    public function update(Profile $profile)
    {    
        $request = request();
        
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'avatar' => ['nullable', 'image', 'max:5000'],
        ]);
        
        if (request('avatar')){

            $ext = request('avatar')->extension();
            $filename = request()->user()->username.'.'.$ext;

            $path = request('avatar')->storeAs('avatars', $filename, 'public');
            
            $avatar = Image::make(storage_path('app/public/'.$path))->fit(1000, 1000);
            $avatar->save();
            
            $profile->update([
                'avatar' => $filename,
            ]);
        }

        
        
        $profile->user()->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
        ]);

        return redirect("/profile/".$profile->user->username);

    }

    public function show()
    {
        $user = Auth::user();
        return view('profile.index', ['user' => $user]);
    }
    
    public function edit(Profile $profile)
    {
        return view('profile.update', ['profile'=> $profile]);
    }
}
