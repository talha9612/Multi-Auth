<x-guest-layout>
    
    <x-auth-card class="bg-white p-6 rounded-lg shadow-md">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" class="font-semibold text-gray-700" />
                <x-input id="name" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                <x-input id="email" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
                <x-input id="password" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold text-gray-700" />
                <x-input id="password_confirmation" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password_confirmation" required />
            </div>

            <!-- User Type -->
            <div>
                <x-label for="user_type" :value="__('User Type')" class="font-semibold text-gray-700" />
                <select id="user_type" name="user_type" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="admin" {{ old('user_type') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ old('user_type') == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
