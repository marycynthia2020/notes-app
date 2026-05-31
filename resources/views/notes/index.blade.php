<x-layout>
    <h1 class='text-3xl mb-8 text-center font-bold '>All Notes</h1>
    <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4'>
        @forelse ($notes as $note)
            <div class=' card card-body shadow-2xl p-4 flex flex-col gap-4 border-2 border-gray-600 '>
                <p><a href="{{ route('notes.show', $note) }} " class="card-title">
                        {{ $note->title }}</a></p>
                <hr />
                <p> {{ $note->description }}</p>
            </div>
        @empty
            <h2 class='font-bold text-xl'>No card found</h2>
        @endforelse
    </div>
</x-layout>




