<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-pink-50">
        <div class="max-w-md w-full bg-pink-200 rounded-3xl shadow-2xl p-8">
            
            <!-- Title -->
            <h2 class="text-3xl font-extrabold text-center text-pink-900 mb-6">
                Register to FOODIES
            </h2>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!-- Role Selection -->
                <div class="mt-4">
                    <x-label for="role" :value="__('Register as')" />
                    <select id="role" name="role" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm">
                        <option value="{{ \App\Models\User::ROLE_CUSTOMER }}">Customer</option>
                        <option value="{{ \App\Models\User::ROLE_PROVIDER }}">Provider</option>
                    </select>
                </div>

                <!-- Register Button -->
                <div class="flex items-center justify-end mt-6">
                    <a class="underline text-sm text-pink-900 hover:text-pink-700" href="{{ route('login') }}">
                        Already registered?
                    </a>

                    <x-button class="ml-4 bg-pink-600 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded-lg">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
