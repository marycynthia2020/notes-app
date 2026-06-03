<x-layout>
    <div class="max-w-xl mx-auto">
        <button class='btn btn-secondary mb-10 px-6  text-white '><a href="{{ route('notes.index') }}">Go home</a></button>
        @if ($note)
            <div class='card card-body shadow-2xl p-4 flex flex-col gap-4 border-2 border-gray-600  '>
                <p class="card-title">{{ $note->title }}</p>
                <hr />
                <p>{{ $note->description }}</p>
            </div>
            <div class='flex gap-4 items-center'>
                <button class=' mt-8 text-white  px-8 btn btn-info'><a href="{{ route('notes.edit', $note) }}">Edit</a></button>
                <form action="{{ route('notes.destroy', $note) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class=' mt-8 btn btn-error px-6 text-white '>Delete</button>
                </form>
            </div>
        @else
            <p class="text-xl font-bold">No Note found</p>
        @endif


    </div>
</x-layout>