<nav class="flex justify-between items-center bg-white shadow-md px-10 py-4">
    <div class="flex items-center">
        <img class="h-8" src="{{ asset('img/logo.png') }}" alt="Modulo Logo">
        <a class="ml-4 text-gray-700 text-2xl font-bold" href="#">Modulo</a>
    </div>
    <ul class="flex text-gray-800">
        <li class=""><a href="{{ route('forms') }}">Forms</a></li>
        <li class="ml-8"><a href="/account">Account</a></li>
        <li class="ml-8"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav>
