@extends('layouts.landing')

@section('content')
    <div class="container mx-auto px-8">
        <div class="py-10">
            <nav class="flex justify-between items-center">
                <div class="flex items-center">
                    <img class="h-10 md:h-16" src="{{ asset('img/logo.png') }}" alt="Modulo Logo">
                    <a class="mx-4 text-gray-700 text-xl md:text-3xl font-bold" href="/">Modulo</a>
                </div>
                <div>
                    <a class="px-3 py-2 rounded text-gray-700 font-bold text-base md:text-lg" href="{{ route('login') }}">
                        Sign In
                    </a>
                </div>
            </nav>
            <div class="flex flex-col items-center mt-10 md:mt-16 md:flex-row">
                <div class="w-full md:w-1/2">
                    <h1 class="max-w-lg text-gray-700 font-bold text-2xl sm:text-3xl md:text-4xl">
                        Don't build a whole backend just <span class="text-teal-400">for one stupid form.</span>
                    </h1>
                    <p class="max-w-lg text-gray-600 mt-3 text-lg sm:text-xl md:text-2xl">
                        Modulo provides form endpoints as a service, so your simple sites can stay simple.
                    </p>
                    <div class="mt-8">
                        <a class="px-3 py-2 bg-teal-400 rounded text-white font-bold text-base md:text-lg" href="{{ route('register') }}">
                            Start Now
                        </a>
                    </div>
                </div>
                <div class="w-full mt-4 md:mt-0 md:w-1/2">
                    <img src="{{ asset('img/example.png') }}" alt="Code Example">
                </div>
            </div>
        </div>
    </div>
@endsection
