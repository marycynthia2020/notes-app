<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<nav class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" --> 
            <a href="{{ route('notes.index') }}" class=" {{request()->is('notes', '/')? 'bg-gray-950': ''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Home</a>
            <a href="{{ route('notes.create') }}" class="{{request()->is('notes/create')? 'bg-gray-950': ''}} rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Create New Note</a>

          </div>
        </div>
      </div>
      <div class="text-white absolute inset-y-0 right-0 gap-3 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <a class="bg-gray-950 px-6 py-2 rounded-sm cursor-pointer  hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
        Login
        </a>
          <a  href= "{{ route('register.create') }}" class="bg-gray-950 px-4 py-2 rounded-sm cursor-pointer  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            Register
          </a>
      </div>
    </div>
  </div>
</nav>
