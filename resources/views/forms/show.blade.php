@extends('layouts.app')

@section('content')
    <div class="flex justify-between">
        <h2 class="text-teal-400 text-2xl">{{ $form->name }}</h2>
        <ul class="flex">
            <li><a class="text-teal-400 font-bold" href="#">Inbox</a></li>
            <li><a class="ml-4 text-gray-500" href="{{ route('forms.edit', $form->id) }}">Settings</a></li>
        </ul>
    </div>

    <div class="flex flex-1 mt-4 relative bg-gray-100 border-t-2 border-gray-400 shadow-md rounded-b-lg overflow-hidden">
        <div class="w-1/3 h-full pb-4 overflow-y-scroll absolute">
            <div class="cursor-pointer bg-gray-300">
                <div class="px-4 py-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 text-lg font-bold">Jone Doe</span>
                        <span class="text-gray-700 text-sm">2020-03-28</span>
                    </div>
                    <p class="mt-6 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="bg-white hover:bg-gray-200 cursor-pointer">
                <div class="px-4 py-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 text-lg font-bold">Jone Doe</span>
                        <span class="text-gray-700 text-sm">2020-03-28</span>
                    </div>
                    <p class="mt-6 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="bg-white hover:bg-gray-200 cursor-pointer">
                <div class="px-4 py-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 text-lg font-bold">Jone Doe</span>
                        <span class="text-gray-700 text-sm">2020-03-28</span>
                    </div>
                    <p class="mt-6 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="bg-white hover:bg-gray-200 cursor-pointer">
                <div class="px-4 py-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 text-lg font-bold">Jone Doe</span>
                        <span class="text-gray-700 text-sm">2020-03-28</span>
                    </div>
                    <p class="mt-6 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="bg-white hover:bg-gray-200 cursor-pointer">
                <div class="px-4 py-6">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 text-lg font-bold">Jone Doe</span>
                        <span class="text-gray-700 text-sm">2020-03-28</span>
                    </div>
                    <p class="mt-6 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
        </div>
        <div class="w-2/3 px-8 py-10 ml-auto">
            <div class="py-4">
                <div class="flex flex-col">
                    <h2 class="text-2xl text-teal-400">John Doe</h2>
                    <p class="mt-3 text-gray-700">Friday March 27, 2020 at 6:36am</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="py-4">
                <div class="flex-col flex-col">
                    <div class="py-4">
                        <label class="text-gray-700 font-bold">Name</label>
                        <p class="mt-2 text-sm text-gray-600">John Doe</p>
                    </div>
                    <div class="py-4">
                        <label class="text-gray-700 font-bold">Name</label>
                        <p class="mt-2 text-sm text-gray-600">John Doe</p>
                    </div>
                    <div class="py-4">
                        <label class="text-gray-700 font-bold">Name</label>
                        <p class="mt-2 text-sm text-gray-600">John Doe</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
