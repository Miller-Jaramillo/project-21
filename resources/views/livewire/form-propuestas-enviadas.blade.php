<div>


    @foreach ($users as $user)
        <div class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-40 px-4 sm:px-6">
            <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
                <div
                    class=" bg-white dark:bg-gray-900 overflow-hidden shadow-xl  sm:rounded-xl rounded-xl border border-b-indigo-400 border-l-indigo-400 border border-t-fuchsia-400 border-r-fuchsia-400 dark:border-b-indigo-900 dark:border-l-indigo-900 dark:border-t-fuchsia-900 dark:border-r-fuchsia-900">

                    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-16 px-4 sm:px-6  ">



                        {{-- titulo formulario --}}
                        <div class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row flex justify-center">

                            <div class=" pb-2  ">
                                <h2 class="text-base font-semibold leading-7 dark:text-gray-100 text-gray-900">
                                    Mis Propuestas</h2>

                            </div>
                        </div>


                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row shadow-xl border-t ">


                            {{-- inicio del grid --}}
                            <div class="mt-5 grid grid-cols-1 sm:grid-cols-1   gap-x-10 pb-5">

                                <div>
                                    <x-label for="nombrePropuesta"
                                        class="block text-sm font-medium leading-6 text-gray-900 flex justify-center">
                                        Nombre
                                        de la Propuesta</x-label>
                                    <div class="mt-1">
                                        <p
                                            class="text-lg font-semibold leading-6 dark:text-gray-100  text-gray-900 flex justify-center  ">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 grid grid-cols-1 sm:grid-cols-3 text-center   gap-x-10  ">

                                <div class="">
                                    <x-label for="nombre" class="block text-sm font-medium leading-6 ">
                                        Nombre</x-label>
                                    <div class="mt-1">
                                        <p class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900 ">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>


                                <div class="sm:mt-0 mt-3">
                                    <x-label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">
                                        Apellido
                                    </x-label>
                                    <div class="mt-1">
                                        <p class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>




                                <div class="sm:mt-0 mt-3">
                                    <x-label for="identificacion"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Identificación</x-label>
                                    <div class="mt-1">
                                        <p class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>


                                <div class="sm:mt-3 mt-3">
                                    <x-label for="nombreAgrupacion"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Agrupación</x-label>
                                    <div class="mt-1">
                                        <p class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $user->email }}
                                        </p>
                                    </div>
                                </div>



                                <div class="sm:mt-3 mt-3">
                                    <x-label for="categoria" class="block text-sm font-medium leading-6 text-gray-900">
                                        Categoria
                                    </x-label>

                                    <div class="mt-1">
                                        <p class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>



                                <div class="sm:mt-3 mt-3">

                                    <x-label for="subcategoria"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Subcategoria</x-label>
                                    <div class="mt-1">
                                        <p class="text-sm font-semibold leading-6 dark:text-gray-100  text-gray-900">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>





                            </div>

                            <div class="mt-5 grid grid-cols-1 sm:grid-cols-1">

                                <div class="">
                                    <x-label for="descripcion"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Descripcion</x-label>
                                    <p class=" text-sm leading-6 text-gray-600">Describenos tu propuesta
                                        :).</p>
                                    <div class="">
                                        <textarea id="descripcion" name="descripcion" rows="3"
                                            class="block w-full rounded-md border-0 text-gray-900 dark:text-gray-100 dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-indigo-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>

                                </div>


                                <div class="mt-4 pb-10">
                                    <x-label for="cover-photo"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Foto o
                                        Video</x-label>
                                        <div
                                        class="mt-2 flex justify-center sm:rounded-lg rounded-md dark:bg-gray-900  border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-6 py-10">
                                        <div class="text-center">

                                            <img class="h-128 w-128 sm:rounded-lg rounded-md  border-2 border-indigo-100 "
                                                src="{{ $user->profile_photo_url }}" alt="{{ $user->email }}">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
