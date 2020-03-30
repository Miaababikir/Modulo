@extends('layouts.landing')

@section('content')
    <div class="flex flex-col justify-center items-center h-full py-12">
        <div class="flex items-center">
            <img class="h-16" src="{{ asset('img/logo.png') }}" alt="Modulo Logo">
            <a class="ml-4 text-gray-700 text-3xl font-bold" href="#">Modulo</a>
        </div>
        <div class="w-full max-w-lg mt-8">
            <div class="flex flex-col py-10 break-words bg-white rounded shadow-2xl">

                <div class="text-gray-700 text-xl text-center">Welcome Back!</div>

                <form class="w-full p-10" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                               class="form-input focus:border-teal-300 focus:shadow-none w-full @error('email') border-red-500 @enderror"
                               name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                               class="form-input focus:border-teal-300 focus:shadow-none w-full @error('password') border-red-500 @enderror"
                               name="password"
                               required>

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap items-center">
                        <button type="submit"
                                class="bg-teal-400 hover:bg-teal-500 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-teal-400 hover:text-teal-500 whitespace-no-wrap no-underline ml-auto"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                                {{ __("Don't have an account?") }}
                                <a class="text-teal-400 hover:text-teal-500 no-underline"
                                   href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </p>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
