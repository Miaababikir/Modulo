@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center py-6">
        <h2 class="text-teal-400 text-2xl font-bold">Form name</h2>
        <a class="text-teal-400 hover:text-teal-500" href="#">Inbox</a>
    </div>

    <form action="#">
        @csrf
        <div>
            <div class="py-6 border-t-2 border-gray-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <span class="text-gray-700 text-xl leading-loose">Form Endpoint</span>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <pre class="bg-gray-300 px-4 py-6 shadow rounded mb-4 overflow-y-scroll"><code class="text-gray-700 text-sm">https://modulo.io/api/forms/taY4fs</code></pre>
                            <a class="text-teal-400 hover:underline" href="#">Copy Embed Code</a>
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
                            <input type="text" class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md" name="name" id="name" placeholder="Josh's wedding" required>
                        </div>
                        <div class="mt-8">
                            <label for="forward_to" class="text-gray-700 font-bold leading-loose">Forward To</label>
                            <input type="text" class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md" name="forward_to" id="forward_to" placeholder="example@test.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="flex md:justify-end">
                    <button type="submit" class="bg-teal-400 text-white uppercase px-5 py-4 rounded">Create Form</button>
                </div>
            </div>
        </div>
    </form>
@endsection
