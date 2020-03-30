@extends('layouts.app')

@section('content')
    <div class="flex justify-between">
        <h2 class="text-teal-400 text-2xl font-bold">Your Forms</h2>
        <a class="px-4 py-2 bg-teal-400 text-white font-bold uppercase rounded hover:bg-teal-500" href="{{ route('forms.create') }}">New form</a>
    </div>

    <div class="mt-4 bg-white px-10 pt-4 pb-8 border-t-2 border-gray-400 shadow-md rounded-b-lg">
        @forelse($forms as $form)
            <div class="mt-6">
                <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <a class="text-teal-400 font-bold hover:underline" href="{{ route('forms.show', $form->id) }}">{{ $form->name }}</a>
                        <span class="mt-3 text-sm text-gray-600">{{ "http://localhost:3000/api/forms/$form->token" }}</span>
                    </div>
                    <a class="text-teal-400 hover:underline" href="#">Copy Embed Code</a>
                </div>
            </div>
        @empty
            <div class="flex flex-col items-center justify-center">
                <svg class="fill-current text-teal-400 opacity-75" width="72px" height="82px" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 72 85">
                    <path
                        d="M64 75h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2h-2a1 1 0 1 1 0-2h2v-2a1 1 0 1 1 2 0v2zm-2-7.95V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v69c0 1.1.9 2 2 2h50.05A9 9 0 0 1 62 67.05zM54.05 77H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h56a4 4 0 0 1 4 4v63.05A9 9 0 1 1 54.05 77zM63 83a7 7 0 1 0 0-14 7 7 0 0 0 0 14zM10 19h44a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 1a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h44a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H10zm-1.5-4h14a.5.5 0 0 1 0 1h-14a.5.5 0 0 1 0-1zM23 8h18a1 1 0 1 1 0 2H23a1 1 0 1 1 0-2zM10 57h44a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0-21h44a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 1a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h44a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H10zM9 48h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm0 1v3h3v-3H9zm-.5-16h14a.5.5 0 0 1 0 1h-14a.5.5 0 0 1 0-1zm7 17h14a.5.5 0 0 1 0 1h-14a.5.5 0 0 1 0-1zm26 0h14a.5.5 0 0 1 0 1h-14a.5.5 0 0 1 0-1z"></path>
                </svg>
                <span class="block text-gray-700 text-lg mt-4">There doesn’t seem to be anything here!</span>
                <a class="text-teal-400 hover:underline text-lg mt-2" href="{{ route('forms.create') }}">Get started by adding your first form</a>
            </div>

        @endforelse

    </div>
@endsection
