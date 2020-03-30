@extends('layouts.landing')

@section('content')
<div class="flex flex-col justify-center items-center py-12 px-4">
    <div class="flex items-center">
        <img class="h-16" src="{{ asset('img/logo.png') }}" alt="Modulo Logo">
        <a class="ml-4 text-gray-700 text-3xl font-bold" href="#">Modulo</a>
    </div>
    @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="w-full max-w-lg mt-8">
        <div class="flex flex-col py-10 break-words bg-white rounded-lg shadow-2xl">

            <div class="text-gray-700 text-xl text-center">Password Reset!</div>

                <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
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

                    <div class="flex flex-wrap">
                        <button type="submit" class="bg-teal-400 hover:bg-teal-500 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Send Password Reset Link') }}
                        </button>
                        <p class="w-full text-xs text-center text-grey-dark mt-8 -mb-4">
                            <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                {{ __('Back to login') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
