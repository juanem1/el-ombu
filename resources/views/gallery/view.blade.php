@extends('layout/front')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>{{$gallery->title}}</h1>
            {{--<span></span>--}}
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_full" data-lightbox="gallery">
                    @foreach($gallery->images->chunk(4) as $imagesChunk)
                        <div class="row bottommargin">
                        @foreach($imagesChunk as $image)
                            <div class="col-md-3">
                                <article class="portfolio-item pf-media pf-icons">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="/img/images/{{ $image->name }}" alt="Gallery">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="/img/images/{{ $image->name }}" class="center-icon" data-lightbox="gallery-item">
                                                <i class="icon-line-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
