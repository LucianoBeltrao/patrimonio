<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <h2
                class="text-3xl font-medium text-orange-500  bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400 dark:text-white container mx-auto px-4 py-5">
                {{ $assetname }}</h2>




            <div class="flex items-right justify-end py-2">

                <a href="{{ route('assets') }}"
                    class="text-white bg-gradient-to-r from-secondary-300 via-secondary-400 to-secondary-400  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-primary-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Todos os Ativos </a>

            </div>


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center">


                <div>
                    <h2 class="text-3xl font-medium text-orange-500 dark:text-white py-2">Ativo: {{ $assetname }}</h2>
                    <h4 class="text-3xl font-medium text-orange-500 dark:text-white py-2">Categoria: {{ $categoryname }}</h4>
                    <h4 class="text-3xl font-medium text-orange-500 dark:text-white py-2">Registro: {{ $record }}</h4>
                    <h4 class="text-3xl font-medium text-orange-500 dark:text-white py-2">Valor do Ativo: {{ $valor }}</h4>
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
