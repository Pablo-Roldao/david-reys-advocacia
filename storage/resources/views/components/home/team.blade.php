@php
    $team = \App\Repositories\EloquentTeamMemberRepository::getAll();
    @endphp
<article id="team" class="container px-3 py-5">
    <div class="text-center">
        <h1 class="mb-4">Conheça a nossa equipe</h1>
    </div>
    <div class="row">
        <div class="col-12 p-4">
            <div class="bg-team rounded"></div>
            <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                @foreach($team as $teamMember)
                    <a href="{{route('team') . '#' . $teamMember->getId()}}" class="text-decoration-none text-dark">
                        <div class="team-item text-center bg-white rounded overflow-hidden">
                            <div class="team-img position-relative mb-2">
                                <img class="img-lawyer img-fluid" src="{{asset('storage/' . $teamMember->getPhotoPath())}}" alt="">
                            </div>
                            <h5 class="mb-2 px-4">{{$teamMember->getName()}}</h5>
                            <p class="mb-3 px-4">{{$teamMember->getPosition()}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</article>
