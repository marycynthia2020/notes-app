<x-layout>
    <div class="max-w-160 mx-auto">
        <button class='mb-10 px-6 py-2 bg-gray-950 text-white rounded-md'><a href="{{ route('notes.index') }}">Go home</a></button>
        @if ($note)
            <div class='p-4 flex flex-col gap-4 border-2 '>
                <p><span class='font-semibold'>Title:</span> {{ $note->title }}</p>
                <hr />
                <p><span class='font-semibold'>Description:</span> {{ $note->description }}</p>
            </div>
            <div class='flex gap-4 items-center'>
                <button class=' mt-8 px-6 py-2 bg-blue-400 text-white rounded-md'><a href="{{ route('notes.edit', $note) }}">Edit</a></button>
                <form action="{{ route('notes.destroy', $note) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class=' mt-8 px-6 py-2 bg-red-950 text-white rounded-md'>Delete</button>
                </form>
            </div>
        @else
            <p class="text-xl font-bold">No Note found</p>
        @endif


    </div>
</x-layout>
