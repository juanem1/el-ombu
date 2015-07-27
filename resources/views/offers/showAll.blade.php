@extends('layout/front')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Ofertas</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div id="portfolio" class="clearfix">
                    @foreach($offers->chunk(4) as $offerSubset)
                        <div class="row bottommargin">
                            @foreach($offerSubset as $offer)
                                <div class="col-md-3">
                                    <article class="portfolio-item pf-media pf-icons">
                                        <!-- Portfolio Image -->
                                        <div class="portfolio-image">
                                            <a href="#">
                                                @if($offer->products->images->first())
                                                    <img src="/img/images/{{ $offer->products->images->first()->name }}" alt="Portfolio Title">
                                                @endif
                                            </a>
                                            <div class="portfolio-overlay" data-lightbox="gallery">
                                                @foreach($offer->products->images as $image)
                                                <a href="/img/images/{{ $image->name }}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                @endforeach
                                                <a href="{{ route('oferta.show', $offer->slug) }}" class="right-icon"><i class="icon-line-plus"></i></a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Description -->
                                        <div class="portfolio-desc">
                                            <h3>
                                                <a href="{{ route('oferta.show', $offer->slug) }}">{{ $offer->title }}</a>
                                            </h3>
                                            <span>$ {{ $offer->price }}</span>
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
