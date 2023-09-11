<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<section class="container">
    {{$search}}
    @foreach($posts as $post)
        <article class="p-12 mb-12 rounded">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-2xl">{{$post->getTitle()}}</h1>
                    <span><strong>{{$post->getAuthor()}}</strong></span>
                </div>
                <span>{{$post->getFormattedCreationDate()}}</span>
            </div>
            @if($post->getCoverPath())
                <img src="{{asset('storage/' . $post->getCoverPath())}}" alt="Capa do post"
                     class="rounded h-80 w-full object-cover"/>
            @endif
            <div class="whitespace-pre-wrap text-justify">
                {{$post->getContent()}}
            </div>
        </article>
        <hr class="bg-gray-600">
    @endforeach
    <div class="mt-4 mb-4" id="">
        {{ $posts->links() }}
    </div>
</section>
