<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>
    </x-slot>

    <div class="container d-flex justify-center">
        <div class="card col-8 py-2 mt-2">
            <div class="d-flex" style="justify-content: center;">
                <img src="{{ asset('storage/avatars/'.Auth::user()->profile->avatar) }}" style="height: 150px; width:auto; border-radius: 50%;">
            </div>
            <div>
                <h5><b>Name</b></h5>
                {{ $user->name }}
                <h5><b>Username</b></h5>
                {{ $user->username }}
                <h5><b>Email</b></h5>
                {{ $user->email }}
                <h5><b>Department</b></h5>
                {{ __('ICT') }}
            </div>
            <div class="d-flex  justify-end mr-5">
                <a href="{{ route('profile.show', $user->profile->id)}}">
                    <button class="btn" style="background-color: #242424; color:white;">Update Profile</button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>