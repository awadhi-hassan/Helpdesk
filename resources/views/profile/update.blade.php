<x-app-layout>
    <x-slot name="header">
        <strong class="mt-2">Update Profile</strong>
    </x-slot>

    <div class="py-4">
        <div class="container d-flex justify-content-center">
            <div class="col-7">
                <h5 style="text-align: center;"><b>Update your Profile</b></h5>
                
                <!-- Validation of Errors -->
                <x-auth-validation-errors class="" :errors="$errors" />
                
                <form action="{{ route('profile.update', $profile->user->id) }}" enctype="multipart/form-data" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group my-2">
                        <label for="name"><b>Name</b></label>
                        <input type="text" class="form-control" value="{{ $profile->user->name }}" name="name" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="username"><b>Username</b></label>
                        <input type="text" class="form-control" value="{{ $profile->user->username }}" name="username" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="email"><b>Email</b></label>
                        <input type="text" class="form-control" value="{{ $profile->user->email }}" name="email" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="avatar"><b>Profile Picture</b></label><br>
                        <input type="file" class="form-control-file" value="{{ $profile->avatar }}" name="avatar">
                    </div>
                    <div class="form-group my-2 d-flex justify-end">
                        <button class="btn" type="submit" style="background-color: #242424; color:white;">Update Profile</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</x-app-layout>