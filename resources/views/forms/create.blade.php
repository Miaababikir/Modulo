@extends('layouts.app')

@section('content')
    <div class="flex justify-start py-6">
        <h2 class="text-teal-400 text-2xl font-bold">New Form</h2>
    </div>

    <form action="#">
        @csrf
        <div>
            <div class="py-6 border-t-2 border-gray-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <span class="text-gray-700 text-xl leading-loose">Form Details</span>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <label for="name" class="text-gray-700 font-bold leading-loose">Name</label>
                            <input type="text" class="form-input border-none shadow-md w-full px-4 py-4 block focus:shadow-md" name="name" id="name" placeholder="Josh's wedding" required>
                        </div>
                        <div class="mt-8">
                            <label for="forward_to" class="text-gray-700 font-bold leading-loose">Forward To</label>
                            <input type="text" class="form-input border-none shadow-md w-full px-4 py-4 block focus:shadow-md" name="forward_to" id="forward_to" placeholder="example@test.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="flex md:justify-end">
                    <button type="submit" class="bg-teal-400  text-white uppercase px-5 py-4 rounded">Create Form</button>
                </div>
            </div>
        </div>
    </form>
@endsection
