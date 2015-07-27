@extends('layout/front')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Complejo {{$complex->title}}</h1>
            {{--<span>La fabricación de nuestras Viviendas Americanas se realiza según las siguientes características técnicas.</span>--}}
        </div>
    </section>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Image ============================================= -->
                            @if (count($images) > 0)
                            <div class="entry-image">
                                <img src="/img/images/{{$images[0]['name']}}" alt="Blog Single">
                            </div>
                            @endif
                            <!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">
                                {{$complex->description}}
                            </div>
                        </div>
                        <!-- .entry end -->
                    </div>
                </div>
                <!-- .postcontent end -->

                <!-- Sidebar ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="masonry-thumbs col-2 bottommargin-sm" data-big="3" data-lightbox="gallery">
                        @foreach($images as $image)
                            <a href="/img/images/{{$image['name']}}" data-lightbox="gallery-item">
                                <img class="image_fade" src="/img/images/{{$image['name']}}" alt="Gallery" />
                            </a>
                        @endforeach
                    </div>

                    <div class="promo promo-dark promo-flat promo-mini promo-uppercase promo-center">
                        <h3>COSTO TOTAL <br/>
                            $ {{$complex->price}} <br/>
                            <small>* (PRECIO CONTADO)</small>
                        </h3>
                        <a href="/contacto" class="button button-large button-dark button-rounded">Consulte Aqui</a>
                    </div>

                </div>
                <!-- .sidebar end -->

            </div>
        </div>
    </section>
@endsection