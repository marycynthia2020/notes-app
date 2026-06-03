<x-layout>
    <form method='POST' action="{{ route('notes.update', $note) }}"
        class='bg-gray-950 max-w-xl p-10 mx-auto rounded-xl'>
        @csrf
        @method('PUT')
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-xl font-semibold text-white">Edit Note</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md   focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">

                                <input id="title" type="text" name="title"
                                    value=" {{ old('title', $note->title) }}" placeholder="learn php"
                                   class="border-gray-300 block min-w-0 grow bg-transparent rounded-md py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />

                            </div>
                        </div>
                        @error('title')
                            <p class='text-red-500 text-sm mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="border-gray-300 border-block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white  placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ old('description', $note->description) }}</textarea>
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences your note.</p>
                        @error('description')
                            <p class='mt-2 text-red-500 text-sm'>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                class="btn bg-error px-6"><a 
                    href="{{ route('notes.show', $note) }}">Cancel</a></button>
            <button type="submit"
                class="btn bg-primary px-6">Save</button>
        </div>
    </form>
</x-layout>
