<x-layout>
    <main class=" text-white">
        <section class="mx-auto max-w-5xl flex-col items-center justify-center px-6 py-16 text-center sm:px-8">
            <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/4 px-4 py-2 text-sm text-blue-100 shadow-lg shadow-blue-950/20">
                <span class="grid size-5 place-items-center rounded-full bg-blue-500/15 text-blue-300">✦</span>
                Your ideas, organized beautifully
            </div>

            <h1 class="mt-6 text-5xl font-black leading-[0.98] tracking-normal text-white sm:text-6xl lg:text-7xl">
                Welcome to
                <span class="block text-primary">
                    NoteHub
                </span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                Your all-in-one space to write, organize, and keep track of what matters most.
            </p>

            <div class="mt-8 flex w-full items-center justify-center gap-4 sm:flex-row">
                <a href="{{ route('notes.create') }}"
                class="btn btn-primary">
                    Create Your First Note
                </a>

                <a href="{{ route('notes.index') }}"
                    class="btn border border-white/15 bg-white/3 px-6">
                    View All Notes
                </a>
            </div>

            <div class="mt-10 grid w-full max-w-4xl gap-4 text-left sm:grid-cols-3">
                <div class="rounded-lg border border-white/10 bg-white/4 p-4">
                    <div class="mb-3 grid size-9 place-items-center rounded-lg bg-indigo-500/15 text-indigo-300">▣</div>
                    <h2 class="text-sm font-semibold text-white">Secure & Private</h2>
                    <p class="mt-1 text-xs leading-5 text-slate-400">Your notes are safe and easy to manage.</p>
                </div>

                <div class="rounded-lg border border-white/10 bg-white/4 p-4">
                    <div class="mb-3 grid size-9 place-items-center rounded-lg bg-blue-500/15 text-blue-300">↯</div>
                    <h2 class="text-sm font-semibold text-white">Fast & Simple</h2>
                    <p class="mt-1 text-xs leading-5 text-slate-400">Create and find notes in seconds.</p>
                </div>

                <div class="rounded-lg border border-white/10 bg-white/4 p-4">
                    <div class="mb-3 grid size-9 place-items-center rounded-lg bg-emerald-500/15 text-emerald-300">⌁</div>
                    <h2 class="text-sm font-semibold text-white">Access Anywhere</h2>
                    <p class="mt-1 text-xs leading-5 text-slate-400">Your notes stay ready whenever you need them.</p>
                </div>
            </div>

            <div class="mt-10 w-full max-w-4xl rounded-2xl border border-white/10 bg-white/4 p-6 text-left shadow-xl shadow-black/20">
                <div class="flex gap-4">
                    <span class="text-5xl leading-none text-blue-400">“</span>
                    <div>
                        <p class="text-lg font-medium text-slate-200">Notes are the building blocks of great ideas.</p>
                        <p class="mt-1 text-sm text-slate-400">Write it down. Organize it. Make it happen.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
