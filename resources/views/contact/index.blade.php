@extends('layout/front')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Contacto</h1>
            {{--<span>La fabricación de nuestras Viviendas Americanas se realiza según las siguientes características técnicas.</span>--}}
        </div>
    </section>

    <!-- Google Map
        ============================================= -->
    <section id="google-map" class="gmap slider-parallax"></section>

    <!-- Content ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <!-- Postcontent ============================================= -->
                <div class="postcontent nobottommargin">

                    @include('partials.messages')

                    {!! Form::open(['route' => 'contact.store', 'class' => 'nobottommargin', 'id' => 'template-contactform']) !!}
                        <div class="col_half">
                            <label for="template-contactform-name">Nombre y Apellido:</label>
                            <input type="text" id="template-contactform-name" name="name" class="sm-form-control required" required />
                        </div>
                        <div class="col_half col_last">
                            <label for="template-contactform-state">Localidad:</label>
                            <input type="text" id="template-contactform-state" name="state" class="sm-form-control required" required />
                        </div>
                        <div class="col_half">
                            <label for="template-contactform-phone">Teléfono:</label>
                            <input type="text" id="template-contactform-phone" name="phone" class="sm-form-control required" required />
                        </div>
                        <div class="col_half col_last">
                            <label for="template-contactform-email">Email:</label>
                            <input type="email" id="template-contactform-email" name="email" class="sm-form-control required" required />
                        </div>
                        <div class="col_full">
                            <label for="template-contactform-message">Mensaje:</label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="msg" rows="6" cols="30" required></textarea>
                        </div>
                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" value="submit">Enviar</button>
                        </div>
                    {!! Form::close() !!}
                </div>
                <!-- .postcontent end -->

                <!-- Sidebar ============================================= -->
                <div class="sidebar col_last nobottommargin">
                    <address>
                        <abbr style="display: inline-block;margin-bottom: 7px;">
                            <strong>Sucursal Pueyrredón:</strong>
                        </abbr><br>
                        Bv. Bulnes 1300 esquina Jacinto Ríos <br>
                        B° Pueyrredón<br>
                        Teléfonos: 0351-4224261 / 4251039
                    </address>

                    <address>
                        <abbr style="display: inline-block;margin-bottom: 7px;">
                            <strong>Sucursal Lomas de San Martín:</strong>
                        </abbr><br>
                        Monseñor Pablo Cabrera 2626<br>
                        Teléfonos: 0351-4880421 / 4807352
                    </address>

                    <address>
                        <abbr style="display: inline-block;margin-bottom: 7px;">
                            <strong>Sucursal Villa Gran Parque:</strong>
                        </abbr><br>
                        Juan B. Justo 7946<br>
                        B° Villa Gran Parque<br>
                        Teléfono: 0351-4995384
                    </address>
                </div>
                <!-- .sidebar end -->
            </div>
        </div>
    </section>
    <!-- #content end -->
@endsection

@section('scripts')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        $('#google-map').gMap({
            maptype: 'ROADMAP',
            zoom: 13,
            icon: {
                image: "img/icons/map-icon-red.png",
                iconsize: [32, 39],
                iconanchor: [32,39]
            },
            markers: [
                {
                    latitude: -31.380483,
                    longitude: -64.2073179,
                    html: '<div><h4 style="margin-bottom: 8px;">Sucursal Pueyrredón</h4><p class="nobottommargin"><address>Bv. Bulnes 1300 esquina Jacinto Ríos<br />B° Pueyrredón<br>Teléfonos: 0351-4224261 / 4251039</address></p></div>'
                }, {
                    latitude: -31.3996441,
                    longitude: -64.1707275,
                    html: '<div><h4 style="margin-bottom: 8px;">Sucursal Lomas de San Martín</h4><p class="nobottommargin"><address>Monseñor Pablo Cabrera 2626<br />B°<br>Teléfonos: 0351-4880421 / 4807352</address></p></div>'
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });
    </script>
@endsection