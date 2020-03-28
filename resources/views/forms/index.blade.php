@extends('layouts.app')

@section('content')
    <div class="flex justify-between">
        <h2 class="text-teal-400 text-2xl font-bold">Your Forms</h2>
        <a class="px-4 py-2 bg-teal-400 text-white font-bold uppercase rounded hover:bg-teal-500" href="#">New form</a>
    </div>

    <div class="mt-4 bg-white px-10 py-8 border-t-2 border-gray-400 shadow-md rounded-b-lg">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <a class="text-teal-400 font-bold hover:underline" href="#">Nothing Works</a>
                <span class="mt-3 text-sm text-gray-600">https://fieldgoal.io/f/Iutexw</span>
            </div>
            <a class="text-teal-400 hover:underline" href="#">Copy Embed Code</a>
        </div>
        <hr class="my-4">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <a class="text-teal-400 font-bold hover:underline" href="#">Blog contact from</a>
                <span class="mt-3 text-sm text-gray-600">https://fieldgoal.io/f/Iutexw</span>
            </div>
            <a class="text-teal-400 hover:underline" href="#">Copy Embed Code</a>
        </div>

    </div>
@endsection
