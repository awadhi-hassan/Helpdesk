<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="{{ asset('ksg-logo.png') }}" style="height: 100px; width: auto;" alt="">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Employee ID -->
            <div class="mt-4">
                <x-label for="employee_id" :value="__('Employee ID')" />

                <x-input id="employee_id" class="block mt-1 w-full" type="text" name="employee_id" :value="old('employee_id')" placeholder="eg. TS/EMBU/2021/18" required />
            </div>

            <!-- Department -->
            <div class="mt-4">
                <x-label for="department" :value="__('Department')" />
                <select name="department" class="form-control block mt-1 w-full" id="department" required>
                    <option></option>
                    <option value="ICT">ICT</option>
                    <option value="RECAS">Recas</option>
                    <option value="HR">Human Resource</option>
                    <option value="Catering">Catering</option>
                    <option value="House Keeping">House Keeping</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Accomodation">Accomodation</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Procurement">Procurement</option>
                </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 hover:text-gray-900" style="text-decoration: none;" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
