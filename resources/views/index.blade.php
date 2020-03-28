@extends('layouts.landing')

@section('content')

    <div class="container mx-auto px-8">
        <div class="py-20">
            <div class="flex flex-col">
                <nav class="flex justify-between">
                    <div class="flex items-center">
                        <img class="h-16" src="{{ asset('img/logo.png') }}" alt="Modulo Logo">
                        <a class="ml-4 text-gray-700 text-3xl font-bold" href="#">Modulo</a>
                    </div>
                    <ul class="flex items-center">
                        <li class=""><a class="text-gray-800 hover:underline" href="#">Sign In</a></li>
                        <li class="ml-8"><a
                                class="px-4 py-3 bg-teal-400 text-white font-bold uppercase rounded hover:bg-teal-500"
                                href="#">Start Now</a></li>
                    </ul>
                </nav>
                <div class="flex flex-col items-center mt-16 md:flex-row">
                    <div class="flex flex-col md:w-1/2">
                        <h1 class="text-4xl text-gray-700 font-bold">Don't build a whole backend <br> just <span
                                class="text-teal-400">for one stupid form.</span></h1>
                        <p class="text-2xl text-gray-600 mt-2">Modulo provides form endpoints as a service,<br> so your
                            simple sites can stay simple.</p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="{{ asset('img/example.png') }}" alt="Code Example">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
