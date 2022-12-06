<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-8000 leading-tight">
            {{ __('Create Article') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ route('articles.update', ['article' => $article]) }}" method="post"> 
                            @csrf
                            @method('PUT')
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">{{ __('Name') }}</label>
                                    <input type="text" id="name" name="name" value="{{ $article -> name }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>

                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600"> {{ __('Presentation') }}</label>
                                    <input type="text" id="name" value="{{ $article-> presentation }}" name="presentation" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">  {{ __('Precio Unitario de Venta') }}</label>
                                    <input type="text" id="name" value="{{ $article -> puu }}" name="puu" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">  {{ __('Precio Unitario de Compra') }}</label>
                                    <input type="text" id="name" value="{{ $article -> puc }}" name="puc" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">  {{ __('Number') }}</label>
                                    <input type="number" id="name" value="{{ $article -> number }}" name="number" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                            </div>
                                <button class="flex mx-auto text-black bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg" type="submit" >
                                  UPDATE                                                       
                                </button>
                        </form>    
                    </div>
                </div>
            </div>
        </div>                         

</x-app-layout>


