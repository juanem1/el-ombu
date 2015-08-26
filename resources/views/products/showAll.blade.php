@extends('layout/front')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Productos y Precios</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div id="portfolio" class="clearfix">
                    @foreach($products->chunk(4) as $productSubset)
                        <div class="row bottommargin">
                            @foreach($productSubset as $product)
                                <div class="col-md-3">
                                    <article class="portfolio-item pf-media pf-icons">
                                        <!-- Portfolio Image -->
                                        <div class="portfolio-image">
                                            <a href="#">
                                                @if(count($product->images) > 0)
                                                    {!! Html::image('/img/images/' . $product->images->first()->name, $product->name) !!}
                                                @endif
                                            </a>
                                            @if(count($product->images) > 0)
                                                <div class="portfolio-overlay" data-lightbox="gallery">
                                                    @foreach($product->images as $image)
                                                        <a href="/img/images/{{ $image->name }}" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <!-- Portfolio Description -->
                                        <div class="portfolio-desc">
                                            <h3>
                                                <a href="{{ route('oferta.show', $product->slug) }}">{{ $product->title }}</a>
                                            </h3>
                                            <div class="price-highlight">
                                                <h4>$ {{ number_format($product->price, 2, ',', '.') }} <small>pesos argentinos</small></h4>
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
