<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-pink-50">
        <div class="max-w-2xl w-full bg-pink-200 rounded-3xl shadow-2xl flex overflow-hidden">

            <!-- Left Side: Picture -->
            <div class="hidden md:block md:w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('images/food-pictures.jpg') }}');">
            </div>

            <!-- Right Side: Login Form -->
            <div class="w-full md:w-1/2 p-8">
                <!-- Title -->
                <h2 class="text-3xl font-extrabold text-center text-pink-900 mb-6">
                    Login to FOODIES
                </h2>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-pink-900">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Login Button -->
                    <div class="mt-6 flex items-center justify-end">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-pink-900 hover:text-pink-700" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-4 bg-pink-600 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded-lg">
                            {{ __('Login') }}
                        </x-button>
                    </div>

                    <!-- Register Link -->
                    <p class="mt-4 text-center text-pink-900 text-sm">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="underline font-semibold hover:text-pink-700">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
