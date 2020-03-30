<nav class="bg-white shadow-md py-4">
    <div class="flex flex-col container mx-auto px-8 md:justify-between md:items-center md:flex-row">
        <div class="flex justify-between items-center">
            <a class="flex items-center text-gray-700 text-2xl font-bold" href="{{ route('forms') }}">
                <img class="h-8 mr-4" src="{{ asset('img/logo.png') }}" alt="Modulo Logo"> Modulo
            </a>
            <button type="button" @click="isOpen = !isOpen" class="block text-gray-700 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-col text-gray-700 md:flex-row md:-mx-2" :class="isOpen ? 'block' : ['hidden' , 'md:block']">
            <a class="mt-2 hover:text-teal-500 md:mt-0 md:mx-2" href="{{ route('forms') }}">Forms</a>
            <a class="mt-2 hover:text-teal-500 md:mt-0 md:mx-2" href="#">Account</a>
            <a class="mt-2 hover:text-teal-500 md:mt-0 md:mx-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</nav>
