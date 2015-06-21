<!-- Header ============================================= -->
<header id="header" class="sticky-header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo ============================================= -->
            <div id="logo">
                <a href="/" class="standard-logo" data-dark-logo="/images/logo.png"><img src="/images/logo.png" alt="El Ombu logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="/images/logo.png"><img src="/images/logo.png" alt="El Ombu logo"></a>
            </div>
            <!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">
                <ul>
                    <li class="current">
                        <a href="/"><div>Home</div></a>
                    </li>
                    <li>
                        <a href="{{ route('ofertas') }}"><div>Ofertas</div></a>
                    </li>
                    <li>
                        <a href="#"><div>Productos y precios</div></a>
                    </li>
                    <li>
                        <a href="#"><div>Galerias</div></a>
                        <ul>
                            <li><a href="{{ route('galeria.view', 'casas') }}"><div>Casas</div></a></li>
                            <li><a href="{{ route('galeria.view', 'cabanas') }}"><div>Cabañas</div></a></li>
                            <li><a href="{{ route('galeria.view', 'interiores') }}"><div>Interiores</div></a></li>
                            <li><a href="{{ route('galeria.view', 'obradores-y-modulos-habitacionales') }}"><div>Obradores y módulos habitacionales</div></a></li>
                            <li><a href="{{ route('galeria.view', 'construccion') }}"><div>Construcción</div></a></li>
                            <li><a href="{{ route('galeria.view', 'materiales') }}"><div>Materiales</div></a></li>
                            <li><a href="{{ route('galeria.view', 'la-fabrica') }}"><div>La fábrica</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><div>Complejos turisticos</div></a>
                        <ul>
                            <li><a href="{{ route('complejos.show', 'zafiro') }}"><div>Complejo Zafiro</div></a></li>
                            <li><a href="{{ route('complejos.show', 'onix') }}"><div>Complejo Onix</div></a></li>
                            <li><a href="{{ route('complejos.show', 'esmeralda') }}"><div>Complejo Esmeralda</div></a></li>
                            <li><a href="{{ route('complejos.show', 'rubi') }}"><div>Complejo Rubí</div></a></li>
                            <li><a href="{{ route('complejos.show', 'cornalina') }}"><div>Complejo Cornalina</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('fichaTecnica') }}"><div>Tecnica</div></a>
                        <ul>
                            <li><a href="{{ route('fichaTecnica') }}"><div>Ficha tecnica</div></a></li>
                            <li><a href="{{ route('vivienda') }}"><div>Vea como se construye su vivienda en 9 pasos</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('laEmpresa') }}"><div>La empresa</div></a>
                        <ul>
                            <li><a href="{{ route('formasDePago') }}"><div>Formas de pago</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}"><div>Contacto</div></a>
                    </li>
                </ul>
            </nav>
            <!-- #primary-menu end -->
        </div>
    </div>
</header>
<!-- #header end -->