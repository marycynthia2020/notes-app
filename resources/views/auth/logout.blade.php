
    <form action="{{ route('logout') }}" method='POST'>
        @csrf
        @method('DELETE')
        <button
            class="bg-gray-950 px-6 py-2 rounded-sm cursor-pointer  hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            Logout
        </button>
    </form>
