<x-app-layout>
    <x-layout title="Links">
        <div class="container m-5">
            <a href="{{ route('links.create') }}" class="btn btn-dark mb-2">Adicionar link</a>

            @isset($messageSuccess)
                <div class="alert alert-success">
                    {{ $messageSuccess }}
                </div>
            @endisset

            <table class="table">
                @foreach ($links as $link)
                    <tr class="align-items-center">
                        <td class="text-dark">{{ $link->title }}</td>
                        <td><a href="{{ $link->link }}" style="color: blue!important">{{ $link->link }}</a></td>

                        <td class="d-flex justify-content-end">
                            <a href="{{ route('links.edit', $link->id) }}" class="btn m-1">
                                Editar
                            </a>
                            <form action="{{ route('links.destroy', $link->id) }}" method="post">
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
