
    <form action="{{ route('logout') }}" method='POST'>
        @csrf
        @method('DELETE')
        <button
            class="btn bg-primary px-6">
            Logout
        </button>
    </form>
