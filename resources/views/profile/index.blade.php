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
            <div class="d-flex">
                <div style="margin-left: 100px;">
                    <h6>Employee ID</h6>
                    <h6 class="ml-10"><b>{{ $user->employee_id }}</b></h6>                      
                    <h6>Name</h6>
                    <h6 class="ml-10"><b>{{ $user->name }}</b></h6>
                    <h6>Username</h6>
                    <h6 class="ml-10"><b>{{ $user->username }}</b></h6>                
                    <h6>Email</h6>
                    <h6 class="ml-10"><b>{{ $user->email }}</b></h6>                
                    <h6>Department</h6>
                    <h6 class="ml-10"><b>{{ $user->department }}</b></h6>                      
                </div>
            </div>
            <div class="d-flex  justify-end mr-5">
                <a href="{{ route('profile.show', $user->profile->id)}}">
                    <button class="btn" style="background-color: #242424; color:white;">Update Profile</button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>