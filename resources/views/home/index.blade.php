@extends('layout/front')

@section('content')

    @include('partials.slider')

    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">

                <div class="fancy-title title-border-color title-center">
                    <h2>Ofertas Destacadas</h2>
                </div>

                @foreach($offers->chunk(4) as $offerSubset)
                    <div class="row bottommargin">
                        @foreach($offerSubset as $offer)
                            <div class="col-md-3">
                                <div class="ipost clearfix">
                                    <div class="entry-image">
                                        <a href="{{ route('oferta.show', $offer->slug) }}">
                                            <img class="image_fade" src="/img/images/{{$offer->products->images->first()->name}}" alt="Ofertas">
                                        </a>
                                    </div>
                                    <div class="entry-title">
                                        <h3>
                                            <a href="{{ route('oferta.show', $offer->slug) }}">
                                                {{ $offer->title }}
                                            </a>
                                        </h3>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li>$ {{ $offer->price }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                @endforeach

                <div class="divider divider-rounded divider-center">
                    <i class="icon-home2"></i>
                </div>

                <!-- 3 colum content -->
                <div class="container clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box fbox-center fbox-effect">
                            <div class="fbox-icon">
                                <a href="{{ route('formasDePago') }}"><i class="icon-credit i-alt"></i></a>
                            </div>
                            <h3>Formas de pago</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box fbox-center fbox-effect">
                            <div class="fbox-icon">
                                <a href="{{ route('fichaTecnica') }}"><i class="icon-measure i-alt"></i></a>
                            </div>
                            <h3>Caracteristicas técnicas</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box fbox-center fbox-effect">
                            <div class="fbox-icon">
                                <a href="{{ route('vivienda') }}"><i class="icon-wrench i-alt"></i></a>
                            </div>
                            <h3>Construir en nueve pasos</h3>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            </div>
        </div>
    </section>

@endsection


@section('scripts')
    <script type="text/javascript" src="js/jquery.camera.js"></script>
    {{-- Slider --}}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#camera_wrap_1').camera({
                thumbnails: true,
                height: '40%',
                loader: 'pie',
                fx: 'scrollHorz',
                loaderPadding: 1,
                loaderStroke: 5,
                onLoaded: function() {
                    $('#camera_wrap_1').find('.camera_next').html('<i class="icon-angle-right"></i>');
                    $('#camera_wrap_1').find('.camera_prev').html('<i class="icon-angle-left"></i>');
                }
            });
        });
    </script>
@endsection