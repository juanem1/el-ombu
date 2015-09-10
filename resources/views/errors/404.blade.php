@extends('layout/front')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Ooopps.. esta pagina no existe.</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_half nobottommargin">
                    <div class="error404 center">404</div>
                </div>
                <div class="col_half nobottommargin col_last">
                    <div class="heading-block nobottomborder">
                        <h4>Ooopps.! La pagina que esta buscando no puede ser encontrada.</h4>
                        <span>Puede probar con alguno de los siguientes links:</span>
                    </div>
                    <div class="col_one_third widget_links nobottommargin">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('complejos.show', 'zafiro') }}">Complejos Turisticos</a></li>
                            <li><a href="{{ route('formasDePago') }}">Plan 50</a></li>
                        </ul>
                    </div>
                    <div class="col_one_third widget_links nobottommargin">
                        <ul>
                            <li><a href="{{ route('products.show') }}">Productos y Precios</a></li>
                            <li><a href="{{ route('laEmpresa') }}">Nuestra Empresa</a></li>
                            <li><a href="{{ route('contact.index') }}">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col_one_third widget_links nobottommargin col_last">
                        <ul>
                            <li><a href="{{ route('galeria.view', 'casas') }}">Galerias</a></li>
                            <li><a href="{{ route('fichaTecnica') }}">Tipos de Construcción</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
