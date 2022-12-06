<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if( $articles->count() )
                    <table class="table-auto w-full text-left whitespace-no-wrap" >
                        <thead >
                            <tr>
                                <th scope="col" class="px-3 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                <th scope="col" class="px-3 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">{{ __('Name') }}</th>
                                <th scope="col" class="px-3 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">{{ __('Presentation') }}</th>
                                <th scope="col" class="px-3 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">PUU</th>
                                <th scope="col" class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">PUC</th>
                                <th scope="col"class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">{{ __('Number') }}</th>
                                <th scope="col" class="py-3 px-4">&nbsp;</th>
                                <th scope="col" class="py-3 px-4">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $article->id }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $article->name }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $article->presentation }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $article->puu }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $article->puc }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $article->number }}</td>
                                <td scope="col" class="py-3 px-4">
                                    <a  href="{{ route('articles.edit', ['article' => $article]) }}">
                                       modificar                                          
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            eliminar                                          
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    <a href="{{ route('articles.create') }}">
                        Insertar nueva tarea                                        
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>