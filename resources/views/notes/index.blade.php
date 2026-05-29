<x-layout>
    <h1 class='text-3xl mb-8 text-center font-bold '>All Notes</h1>
    <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4'>
        @forelse ($notes as $note)
            <div class='p-4 flex flex-col gap-4 border-2'>
                <p><a href="{{ route('notes.show', $note) }}"><span class='font-semibold'>Title:</span>
                        {{ $note->title }}</a></p>
                <hr />
                <p><span class='font-semibold'>Description:</span> {{ $note->description }}</p>
            </div>
        @empty
            <h2 class='font-bold text-xl'>No card found</h2>
        @endforelse
    </div>
</x-layout>
