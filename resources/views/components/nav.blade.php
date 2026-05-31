    <div class="navbar bg-base-100  shadow-2xl">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="-1"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a href="{{ route('notes.index') }}" class="{{ request()->is('notes') ? 'text-primary' : '' }}">Notes</a></li>
                        <li href="{{ route('notes.create') }}" class="{{ request()->is('notes/create') ? 'text-primary' : '' }}"><a>New Notes</a></li>
                      @guest
                            <li>  <a class="btn text-primary bg-white " href= "{{ route('register.create') }}">Register</a></li>
                      @endguest
                </ul>
            </div>
            <a href='/notes' class="btn btn-ghost text-xl">Notes<span class='text-primary'>Hub</span></a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                    <li><a href="{{ route('notes.index') }}" class="{{ request()->is('notes') ? 'text-primary' : '' }}">Notes</a></li>
                    <li><a href="{{ route('notes.create') }}" class="{{ request()->is('notes/create') ? 'text-primary' : '' }}">New Notes</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-3">
                 @auth
                     @include('auth.logout')
                     @else
                     <a class="btn bg-primary px-6" href="{{ route('login') }}">Login</a>
                     <a class="btn hidden lg:flex text-primary bg-white " href= "{{ route('register.create') }}">Register</a>
                 @endauth
                 
        </div>
    </div>








{{-- <nav
    class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                        @auth
                            <a href="{{ route('notes.index') }}"
                                class=" {{ request()->is('notes') ? 'bg-gray-950' : '' }} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Notes</a>
                            <a href="{{ route('notes.create') }}"
                                class="{{ request()->is('notes/create') ? 'bg-gray-950' : '' }} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Create
                                New Note</a>

                        @endauth

                    </div>
                </div>
            </div>
            <div
                class="text-white absolute inset-y-0 right-0 gap-3 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @auth
                    @include('auth.logout')
                @else
                    <a href="{{ route('login') }}"
                        class="bg-gray-950 px-6 py-2 rounded-sm cursor-pointer  hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        Login
                    </a>
                    <a href= "{{ route('register.create') }}"
                        class="bg-gray-950 px-4 py-2 rounded-sm cursor-pointer  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav> --}}
