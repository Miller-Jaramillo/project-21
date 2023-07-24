<div>

    @foreach ($users as $user)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-60 px-4 sm:px-6 py-5 ">
            <div
                class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-xl rounded-xl
        border border-b-indigo-400 border-l-indigo-400 border border-t-fuchsia-400 border-r-fuchsia-400 pb-2
        dark:border-b-indigo-900 dark:border-l-indigo-900 dark:border-t-fuchsia-900 dark:border-r-fuchsia-900 ">


                <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 py-5">
                    <button
                        class="flex  text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                        <div class="ml-2 mt-2 flex justify-center">
                            <x-label for="" class="text-sm font-semibold leading-6">
                                {{ Auth::user()->name }}
                            </x-label>

                        </div>
                    </button>
                </div>

                {{-- 1.1.2 --}}
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6 ">
                    <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg rounded-md  pb-2 ">


                        <form action="">

                            <div class="text-white flex justify-center ">
                                <label for=""
                                    class="text-md font-semibold leading-7 text-indigo-400 uppercase tracking-wider">
                                    <b>CANTO A LA LUNA</b>
                                </label>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-1  px-2 py-3 grid gap-2 text-white">

                                <div class="col-span-1">


                                    {{-- 1.1.2.1 --}}
                                    <div class="max-w-7xl mx-auto lg:px-5 ">
                                        <div
                                            class="bg-white dark:bg-gray-900 overflow-hidden  sm:rounded-lg rounded-md   pb-2 ">


                                            <div class="grid grid-cols-1 sm:grid-cols-1  px-2 py-3 grid gap-2">

                                                <div class="px-4 sm:px-0">
                                                    <h3
                                                        class="text-base font-semibold leading-7 text-sm text-blue-200 uppercase tracking-wider">
                                                        Nombre Agrupacion</h3>
                                                    <p class=" max-w-2xl text-md leading-6 text-gray-500 ">
                                                        {{ $user->name }} </p>
                                                </div>

                                            </div>

                                            <div class="grid grid-cols-1 sm:grid-cols-2  px-2 py-3 grid gap-2">

                                                <h1>
                                                    <div class="px-4 sm:px-0">
                                                        <h3
                                                            class="text-sm font-semibold leading-7 text-blue-200 uppercase tracking-wider">
                                                            Categoria</h3>
                                                        <p class="max-w-2xl text-md leading-6 text-gray-500">
                                                            Desarrollo
                                                            web</p>
                                                    </div>
                                                </h1>

                                                <h1>
                                                    <div class="px-4 sm:px-0">
                                                        <h3
                                                            class="text-sm font-semibold leading-7 text-blue-200 uppercase tracking-wider">
                                                            Sub Categoria</h3>
                                                        <p class="max-w-2xl text-md leading-6 text-gray-500">Full
                                                            Stack
                                                        </p>
                                                    </div>
                                                </h1>
                                            </div>

                                            <div class="grid grid-cols-1 sm:grid-cols-1  px-2 py-3 grid gap-2">

                                                <div class="px-4 sm:px-0">
                                                    <h3
                                                        class="text-sm font-semibold leading-7 text-blue-200 uppercase tracking-wider">
                                                        descripcion</h3>
                                                    <p class="max-w-2xl text-sm leading-6 text-gray-500">Que HP
                                                        Chimba
                                                        Que
                                                        HP Chimba Que HP Chimba Que HP Chimba
                                                        Que HP Chimba Que HP Chimba Que HP Chimba Que HP Chimba Que
                                                        HP
                                                        Chimba
                                                        Que HP Chimba Que HP Chimba Que HP Chimba
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-1">

                                    {{-- 1.1.2.2 --}}

                                    <div class="mt-4 ">
                                        <x-label for="cover-photo"
                                            class="block text-sm font-medium  leading-6 text-gray-900">
                                            Foto o
                                            Video</x-label>
                                            <div
                                            class="mt-2 flex justify-center sm:rounded-lg rounded-md  dark:bg-gray-900  border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-6 py-10">
                                            <div class="text-center">

                                                <img class="h-128 w-128 sm:rounded-lg rounded-md border-2 border-indigo-100 "
                                                    src="{{ $user->profile_photo_url }}" alt="{{ $user->email }}">

                                            </div>
                                        </div>
                                    </div>


                                    {{-- 1.1.2.3 --}}
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-5 px-4 sm:px-6 py-2">

                                        <div
                                            class="bg-white dark:bg-gray-900 overflow-hidden  sm:rounded-lg rounded-md  pb-2">


                                            <div class="flex justify-center mt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-5 h-5 icon-red dark:icon-red">
                                                    <path
                                                        d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
                                                </svg>
                                                <x-label for="" class="mr-5 ml-1">
                                                    0
                                                </x-label>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="w-5 h-5  icon-blue dark:icon-blue">
                                                    <path fill-rule="evenodd"
                                                        d="M3.43 2.524A41.29 41.29 0 0110 2c2.236 0 4.43.18 6.57.524 1.437.231 2.43 1.49 2.43 2.902v5.148c0 1.413-.993 2.67-2.43 2.902a41.102 41.102 0 01-3.55.414c-.28.02-.521.18-.643.413l-1.712 3.293a.75.75 0 01-1.33 0l-1.713-3.293a.783.783 0 00-.642-.413 41.108 41.108 0 01-3.55-.414C1.993 13.245 1 11.986 1 10.574V5.426c0-1.413.993-2.67 2.43-2.902z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <x-label for="" class="mr-5 ml-1  text-gray-400">
                                                    0
                                                </x-label>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- 1.1.2.3 --}}
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-5 px-4 sm:px-6">

                                        <div
                                            class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg rounded-md  pb-2">
                                            <div
                                                class="flex justify-center mt-2 border-b dark:border-b-indigo-600 border-b-indigo-600  ">

                                                <button
                                                    class="flex motion-safe:hover:scale-[1.05]  text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 icon-red dark:icon-red">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                    </svg>

                                                    <x-label for=""
                                                        class="ml-1 text-sm font-semibold leading-7 uppercase tracking-wider text-red-400">
                                                        Me Gusta
                                                    </x-label>

                                                </button>

                                                <button
                                                    class=" flex motion-safe:hover:scale-[1.05] ml-2 flex  text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6 icon-blue dark:icon-blue">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                                    </svg>

                                                    <x-label for=""
                                                        class="ml-1 text-sm font-semibold leading-7 uppercase tracking-wider text-blue-400">
                                                        Comentar
                                                    </x-label>

                                                </button>
                                            </div>

                                            <div class="flex justify-center mt-2 ml-2">

                                                <div class="flex items-center">
                                                    <img class="h-12 w-12 rounded-full border-2 border-indigo-100 "
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        alt="{{ Auth::user()->name }}" />

                                                </div>
                                                <x-input wire:model=""
                                                    class="form-input rounded-xl shadow-sm block w-full  text-gray-500  dark:text-gray-500 "
                                                    type="text" placeholder="Escribe un comentario..." />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-60 px-4 sm:px-6 py-2 ">
        <div
            class="justify-between border-t dark:border-indigo-800 border-indigo-500  dark:bg-gray-900 bg-gray-100 px-4 py-3 sm:px-6 text-gray-500 ">
            {{ $users->links() }}
        </div>
    </div>
</div>
