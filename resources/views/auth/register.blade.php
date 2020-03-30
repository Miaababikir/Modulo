@extends('layouts.landing')

@section('content')
    <div class="flex flex-col justify-center items-center py-12 px-4">
        <div class="flex items-center">
            <img class="h-16" src="{{ asset('img/logo.png') }}" alt="Modulo Logo">
            <a class="ml-4 text-gray-700 text-3xl font-bold" href="#">Modulo</a>
        </div>
        <div class="w-full max-w-lg mt-8">
            <div class="flex flex-col break-words py-10 break-words bg-white rounded-lg shadow-2xl">

                <div class="text-gray-700 text-xl text-center">Welcome!</div>

                <form class="w-full p-10" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap mb-6">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text"
                               class="form-input focus:border-teal-300 focus:shadow-none w-full @error('name')  border-red-500 @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                               class="form-input focus:border-teal-300 focus:shadow-none w-full @error('email') border-red-500 @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email">

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
                               name="password" required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap mb-6">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password"
                               class="form-input focus:border-teal-300 focus:shadow-none w-full"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                                class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-teal-400 hover:bg-teal-500">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                            {{ __('Already have an account?') }}
                            <a class="text-teal-400 hover:text-teal-500 no-underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
