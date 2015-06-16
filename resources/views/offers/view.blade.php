@extends('app')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>{{$offer->title}}</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_two_third">
                    <p>{{ $offer->products->longDescription }}</p>

                    <div class="promo promo-dark promo-flat">
                        <h3>TODO A TAN SOLO <span>$ {{ $offer->price }}<sup>*</sup> </span></h3>
                        <span><small>* Valor expresado en pesos argentinos.</small></span>
                        <a href="{{ route('contact.index') }}" class="button button-dark button-xlarge button-rounded">Consulte Aquí</a>
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <div class="masonry-thumbs col-2 bottommargin-sm clearfix" data-big="3" data-lightbox="gallery">
                        @foreach($offer->products->images as $image)
                            <a href="{{ $image->name }}" data-lightbox="gallery-item">
                                <img class="image_fade" src="{{ $image->name }}" alt="Gallery Thumb 1" />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/functions.js"></script>
@endsection