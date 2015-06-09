@extends('app')

@section('content')

    @include('partials.slider')

    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">

                @foreach(array_chunk($offers, 4) as $offerSubset)
                    <div class="row bottommargin">
                        @foreach($offerSubset as $offer)
                            <div class="col-md-3">
                                <div class="feature-box media-box">
                                    <div class="fbox-media">
                                        <img src="{{$offer['images'][0]['name']}}" alt="Oferta">
                                    </div>
                                    <div class="fbox-desc">
                                        <h3>
                                            {{$offer['title']}}
                                            <span class="subtitle">$ {{$offer['price']}}</span>
                                        </h3>
                                    </div>
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
                                <a href="#"><i class="icon-credit i-alt"></i></a>
                            </div>
                            <h3>Formas de pago</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box fbox-center fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-measure i-alt"></i></a>
                            </div>
                            <h3>Caracteristicas técnicas</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box fbox-center fbox-effect">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-wrench i-alt"></i></a>
                            </div>
                            <h3>Construir en nueve pasos</h3>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>

@endsection


@section('scripts')
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/jquery.camera.js"></script>
    {{-- Slider --}}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#camera_wrap_1').camera({
                thumbnails: true,
                height: '40%',
                loader: 'pie',
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