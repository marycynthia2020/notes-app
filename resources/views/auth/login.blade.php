<x-layout>
    <div class='grid min-h-screen place-items-center '>
        <form method='POST' action="{{ route('login.store') }}" class='w-full bg-gray-950 max-w-xl p-10  rounded-xl'>
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-xl font-semibold text-white">Login</h2>

                <div class="mt-10 space-y-8">

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">

                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    placeholder="jondoe@gmail.com"
                                    class="rounded-md border-gray-300 block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />

                            </div>
                        </div>
                        <x-error name='email' />
                    </div>

                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">

                                <input id="password" type="password" name="password" value="{{ old('password') }}"
                                    placeholder="*****"
                                    class="rounded-md border-gray-300 block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />

                            </div>
                        </div>
                             <x-error name='password' />
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit"
                class="px-6 btn btn-primary">Login</button>
        </div>
    </form>
    </div>




</x-layout>
