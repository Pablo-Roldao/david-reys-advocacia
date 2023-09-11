
<article class="container-fluid p-0 apresentation" id="apresentation">

    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <script>
                function isMobileDevice() {
                    return window.matchMedia("(max-width: 768px)").matches;
                }
                @php
                    $imagesMobile = \App\Repositories\EloquentImageApresentationRepository::getAllMobile();
                    $imagesDesktop = \App\Repositories\EloquentImageApresentationRepository::getAllDesktop();
                @endphp
                if (isMobileDevice()) {
                    @php($classMobile = 'active')
                    @foreach($imagesMobile as $i => $image)
                    @php($classMobile = $i == 0 ? 'active' : '')
                    document.write("<div class='carousel-item {{$classMobile}}'>");
                    document.write("<img class='carousel-img' src='{{asset('storage/' . $image->getPhotoPath())}}'>");
                    document.write("</div>");
                    @endforeach
                } else {
                    @php($classDesktop = 'active')
                    @foreach($imagesDesktop as $i => $image)
                    @php($classDesktop = $i == 0 ? 'active' : '')
                    document.write("<div class='carousel-item {{$classDesktop}}'>");
                    document.write("<img class='carousel-img-desktop' src='{{asset('storage/' . $image->getPhotoPath())}}'>");
                    document.write("</div>");
                    @endforeach
                }
            </script>
        </div>

        <a class="carousel-control-prev d-flex justify-content-start" href="#header-carousel" data-slide="prev">
            <div class="btn btn-lg btn-lg-square">
                <span class="carousel-control-prev-icon"></span>
            </div>
        </a>
        <a class="carousel-control-next d-flex justify-content-end" href="#header-carousel" data-slide="next">
            <div class="btn btn-lg btn-secondary btn-lg-square">
                <span class="carousel-control-next-icon"></span>
            </div>
        </a>
    </div>

</article>
