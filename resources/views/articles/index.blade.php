<x-app-layout>
    <x-layout title="Artigos">
        <div class="container m-5">
            <a href="{{ route('articles.create') }}" class="btn btn-dark mb-2">Adicionar artigo</a>

            @isset($messageSuccess)
                <div class="alert alert-success">
                    {{ $messageSuccess }}
                </div>
            @endisset

            <table class="table">
                @foreach ($articles as $article)
                    <tr class="align-items-center">
                        <td class="text-dark">{{ $article->title }}</td>
                        <td><a href="{{ $article->link }}" style="color: blue!important">{{ $article->link }}</a></td>


                        <td class="d-flex justify-content-end">
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn m-1">
                                Editar
                            </a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn m-1">Deletar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
    </x-layout>
</x-app-layout>
