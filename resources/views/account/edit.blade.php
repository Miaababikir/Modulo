@extends('layouts.app')

@section('content')
    <div class="flex items-center py-6">
        <h2 class="text-teal-400 text-2xl font-bold">Account Settings</h2>
    </div>

    <form action="#">
        @csrf
        <div>
            <div class="py-6 border-t-2 border-gray-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <span class="text-gray-700 text-xl leading-loose">API Key</span>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <pre class="bg-gray-300 px-4 py-6 shadow rounded mb-4 overflow-y-scroll"><code
                                    class="text-gray-700 text-sm">nsuVlWPGDkI1Q5WGML1ehigWDKyvWQB1s3EOFcnHdGB34z4m7ocF9BjoihXz</code></pre>
                            <a class="text-teal-400 hover:underline" href="#">Copy API Key</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 border-t-2 border-gray-300">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <span class="text-gray-700 text-xl leading-loose">Account Details</span>
                    </div>
                    <div class="md:w-2/3">
                        <div>
                            <label for="name" class="text-gray-700 font-bold leading-loose">Name</label>
                            <input type="text"
                                   class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md"
                                   name="name" id="name" placeholder="Jone Doe" required>
                        </div>
                        <div class="mt-8">
                            <label for="email" class="text-gray-700 font-bold leading-loose">Email</label>
                            <input type="text"
                                   class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md"
                                   name="email" id="email" placeholder="example@test.com">
                        </div>
                        <div class="mt-8">
                            <button class="bg-gray-300 px-4 py-3 text-gray-700 font-bold rounded">Change Password
                            </button>
                        </div>
                        {{--                        <div class="mt-8">--}}
                        {{--                            <label for="password" class="text-gray-700 font-bold leading-loose">New Password</label>--}}
                        {{--                            <input type="text" class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md" name="password" id="password">--}}
                        {{--                        </div>--}}
                        {{--                        <div class="mt-8">--}}
                        {{--                            <label for="password_confirmation" class="text-gray-700 font-bold leading-loose">Confirm New Password</label>--}}
                        {{--                            <input type="text" class="form-input border-none shadow w-full px-4 py-4 block focus:shadow-md" name="password_confirmation" id="password_confirmation">--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="flex md:justify-end">
                    <button type="submit"
                            class="bg-white px-5 py-4 border border-gray-200 text-gray-700 font-bold shadow-md uppercase rounded">
                        Cancel
                    </button>
                    <button type="submit" class="bg-teal-400 text-white uppercase px-5 py-4 rounded ml-4">Save Changes
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
