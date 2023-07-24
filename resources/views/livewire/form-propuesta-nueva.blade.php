<div>

    <div class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 pb-5">

        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
            <div
                class="pb-3 bg-white dark:bg-gray-900 overflow-hidden shadow-xl  sm:rounded-xl rounded-xl
                border border-b-indigo-400 border-l-indigo-400 border border-t-fuchsia-400 border-r-fuchsia-400 pb-2
                dark:border-b-indigo-900 dark:border-l-indigo-900 dark:border-t-fuchsia-900 dark:border-r-fuchsia-900">

                <div class=" max-w-7xl mx-auto sm:px-6 lg:px-20 px-4 sm:px-6  ">
                    <form>

                        {{-- titulo formulario --}}
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row mt-5">

                            <div class="border-b border-gray-100 pb-2  ">
                                <h2 class="text-base font-semibold leading-7 dark:text-gray-100 text-gray-900">
                                    Registrar propuesta</h2>
                                <p class="mt-2 text-sm leading-6 dark:text-gray-400 text-gray-700 text-justify">
                                    Tu propuesta será enviada a los
                                    funcionarios de Corpocarnaval.
                                    Ellos se encargarán de evaluarla y te notificarán su
                                    publicación en su correo electronico. <b> ¡Buena Suerte!</b></p>
                            </div>
                        </div>

                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 sm:px-6 flex-row">


                            {{-- inicio del grid --}}
                            <div class="mt-5 grid grid-cols-1 sm:grid-cols-1   gap-x-10 ">
                                <div>
                                    <x-label for="nombrePropuesta"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nombre de
                                        la
                                        Propuesta</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" name="nombrePropuesta" id="nombrePropuesta"
                                            autocomplete="given-name"
                                            class=" block w-full rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    </div>
                                </div>
                            </div>


                            <div class="mt-3 grid grid-cols-1 sm:grid-cols-3   gap-x-10 ">
                                <div>
                                    <x-label for="nombre" class="block text-sm font-medium leading-6 ">
                                        Nombre</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" name="nombre" id="nombre"
                                            autocomplete="given-name"
                                            class=" block w-full rounded-md border-0  shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        " />
                                    </div>
                                </div>


                                <div class="sm:mt-0 mt-3">
                                    <x-label for="apellido"
                                        class="block text-sm font-medium leading-6 text-gray-900">Apellido
                                    </x-label>
                                    <div class="mt-1">
                                        <x-input type="text" name="apellido" id="apellido"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    </div>
                                </div>




                                <div class="sm:mt-0 mt-3">
                                    <x-label for="identificacion"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Identificacion</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" name="identificacion" id="identificacion"
                                            autocomplete="identificacion"
                                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    </div>
                                </div>


                                <div class="sm:mt-3 mt-3">
                                    <x-label for="nombreAgrupacion"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nombre
                                        Agrupacion</x-label>
                                    <div class="mt-1">
                                        <x-input type="text" name="nombreAgrupacion" id="nombreAgrupacion"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    </div>
                                </div>



                                <div class="sm:mt-3 mt-3">
                                    <x-label for="categoria"
                                        class="block text-sm font-medium leading-6 text-gray-900">Categoria
                                    </x-label>

                                    <div class="mt-1">
                                        <x-select id="categoria" name="categoria" autocomplete="categoria"
                                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </x-select>
                                    </div>
                                </div>



                                <div class="sm:mt-3 mt-3">

                                    <x-label for="subcategoria"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Subcategoria</x-label>
                                    <div class="mt-1">
                                        <x-select id="subcategoria" name="subcategoria"
                                            autocomplete="subcategoria"
                                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </x-select>
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
                                            class="block w-full rounded-md border-0 text-gray-900 dark:text-gray-100 dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>

                                </div>


                                <div class="mt-4">
                                    <x-label for="cover-photo"
                                        class="block text-sm font-medium leading-6 text-gray-900">Foto o
                                        Video</x-label>
                                    <div
                                        class="mt-2 flex justify-center dark:bg-gray-900 rounded-lg border border-dashed border-indigo-900/25 dark:border-indigo-100/25 px-6 py-10">
                                        <div class="text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                <label for="file-upload"
                                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                    <span>Cargar un archivo</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                        class="sr-only">
                                                </label>
                                                <p class="pl-1">o arrastrar y soltar</p>
                                            </div>
                                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to
                                                10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <x-label for="about"
                                        class="block text-sm font-medium leading-6 text-gray-900">
                                        Observaciones</x-label>
                                    <p class=" text-sm leading-6 text-gray-600"> Señor(a) funcionario(a),
                                        ¿tiene
                                        alguna
                                        observacion?.</p>
                                    <div class="">
                                        <textarea id="about" name="about" rows="3"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-100 dark:bg-gray-900 shadow-sm ring-1 ring-inset ring-indigo-300 dark:ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-4 flex justify-end">
                                <button wire:click="closeForm" type="button"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                    Cancelar
                                </button>
                                <x-button wire:click="submitForm" class="ml-4 bg-green-600 dark:bg-green-600">
                                    {{ __('Enviar') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
