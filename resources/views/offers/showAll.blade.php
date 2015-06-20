@extends('app')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Offertas</h1>
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
                                                <img src="a.jpg" alt="Portfolio Title">
                                            </a>
                                            <div class="portfolio-overlay" data-lightbox="gallery">
                                                <a href="a.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                <a href="{{ route('oferta.show', $offer->slug) }}" class="right-icon"><i class="icon-line-plus"></i></a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Description -->
                                        <div class="portfolio-desc">
                                            <h3>
                                                <a href="#">{{ $offer->title }}</a>
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

@section('scripts')
    <script type="text/javascript" src="/js/functions.js"></script>
@endsection