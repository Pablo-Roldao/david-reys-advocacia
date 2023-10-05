<article class="p-16 pt-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Links úteis
        </h2>
    </x-slot>


    <div class="mb-4">
        <livewire:useful-link.useful-link-store />
    </div>
    <table class="bg-blue-900 text-white rounded-lg w-full">
        <thead class="">
        <tr>
            <th class="p-3">Título</th>
            <th class="p-3">Link</th>
            <th class="p-3">Ações</th>
        </tr>
        </thead>
        <tbody class="bg-white text-gray-800">
            @foreach($usefulLinks as $usefulLink)
                <tr>
                    <td class="p-2">{{ $usefulLink->getTitle() }}</td>
                    <td class="p-2">{{ $usefulLink->getLink() }}</td>
                    <td class="p-2 flex gap-4">
                        <livewire:useful-link.useful-link-destroy :usefulLink="$usefulLink" />

                        <livewire:useful-link.useful-link-edit :usefulLink="$usefulLink" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</article>
