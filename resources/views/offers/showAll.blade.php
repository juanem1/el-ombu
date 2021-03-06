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
                                                @if ($offer->products->style)
                                                    <span class="house-style-img-label">
                                                        ESTILO {{$offer->products->style->name}}
                                                    </span>
                                                @endif
                                                @if(count($offer->products->images) > 0)
                                                    <img src="/img/images/{{ $offer->products->images->first()->name }}" alt="Portfolio Title" />
                                                @endif
                                            </a>
                                            <div class="portfolio-overlay" data-lightbox="gallery">
                                                @if(count($offer->products->images) > 0)
                                                    {!! Html::gallery($offer->products->images, 'left-icon') !!}
                                                    <a href="{{ route('oferta.show', $offer->slug) }}" class="right-icon"><i class="icon-line-plus"></i></a>
                                                @else
                                                    <a href="{{ route('oferta.show', $offer->slug) }}" class="center-icon"><i class="icon-line-plus"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- Portfolio Description -->
                                        <div class="portfolio-desc">
                                            <h3>
                                                <a href="{{ route('oferta.show', $offer->slug) }}">{{ $offer->title }}</a>
                                            </h3>
                                            <div class="price-highlight">
                                                <h4>$ {{ number_format($offer->price, 2, ',', '.') }} <small>pesos argentinos</small></h4>
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
