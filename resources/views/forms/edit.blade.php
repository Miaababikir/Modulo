@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center py-6">
        <h2 class="text-teal-400 text-2xl font-bold">{{ $form->name }}</h2>
        <a class="text-teal-400 hover:text-teal-500" href="{{ route('forms') }}">Inbox</a>
    </div>

    <form action="{{ route('forms.update', $form->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div class="py-6 border-t-2 border-gray-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <span class="text-gray-700 text-xl leading-loose">Form Endpoint</span>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <pre class="bg-gray-300 px-4 py-6 shadow rounded mb-4 overflow-y-scroll"><code
                                    class="text-gray-700 text-sm" id="formLink">http://localhost:3000/api/forms/{{ $form->token }}</code></pre>
                            <copy-to-clipboard selector="formLink" text="Copy Embed Code" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 border-t-2 border-gray-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <span class="text-gray-700 text-xl leading-loose">Form Details</span>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <label for="name" class="text-gray-700 font-bold leading-loose">Name</label>
                            <input type="text"
                                   class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md"
                                   name="name" id="name" placeholder="Josh's wedding" required value="{{ $form->name }}">
                        </div>
                        <div class="mt-8">
                            <label for="forward_to" class="text-gray-700 font-bold leading-loose">Forward To</label>
                            <input type="text"
                                   class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md"
                                   name="forward_to" id="forward_to" placeholder="example@test.com" value="{{ $form->forward_to }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="flex justify-between">
                    <a class="bg-white px-5 py-4 border border-gray-200 text-gray-700 font-bold shadow-md uppercase rounded cursor-pointer">Delete</a>
                    <button type="submit" class="px-5 py-4 bg-teal-400 text-white uppercase rounded">Save Changes</button>
                </div>
            </div>
        </div>
    </form>
@endsection
