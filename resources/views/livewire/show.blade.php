<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <h2
                class="text-3xl font-medium text-orange-500  bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400 dark:text-white container mx-auto px-4 py-5">
                {{ $assetname }} </h2>




            <div class="flex items-right justify-end py-2">

                <a href="{{ route('assets') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 flex items-center space-x-2">
                    <svg class="w-6 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                    </svg>
                    <span>Ver todos</span>
                </a>


            </div>


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-start gap-8">

                <div
                    class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-orange-500 dark:text-white">
                            Descriminação do Ativo
                        </h5>
                        <a href="{{ route('assets') }}"
                            class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                            Ver todos
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <x-record-icon></x-record-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Registro:
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $record }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <x-light-icon></x-light-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Ativo
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            <text class="text-orange-500">Número de Série:</text> 0001-0
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $assetname }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <x-archive-icon></x-archive-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Categoria:
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            <text class="text-orange-500">Série Categoria:</text> 0001-0
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $categoryname }}
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <x-medal-icon></x-medal-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Marca:
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $67
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <x-star-icon></x-star-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Modelo:
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $367
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <x-leaf-icon></x-leaf-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Saúde do Ativo:
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        Novo
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <x-bank-icon></x-bank-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Valor:
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        R$ {{ $valor }}
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-shrink-0">
                                        <x-maps-icon></x-maps-icon>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-orange-500 truncate dark:text-white">
                                            Localização:
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        BR-040 135 km 783 - Matriz
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                @if ($photoasset)
                    <img class="h-auto max-w-md ms-auto rounded-lg" src="{{ url("storage/{$photoasset}") }}"
                        alt="{{ $assetname }}">
                @else
                    <img src="{{ url('images/without-image.png') }}" alt="{{ $assetname }}"
                        class="rounded-full h-80 w-80">
                @endif

            </div>





        </div>

    </div>

</div>

</div>


</div>
