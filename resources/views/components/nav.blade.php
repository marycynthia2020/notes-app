    <div class="navbar bg-base-100  shadow-2xl fixed top-0 left-0 ">
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
            <a href='/' class="font-bold text-xl">Note<span class='text-primary'>Hub</span></a>
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
