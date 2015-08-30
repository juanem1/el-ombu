<!-- Header ============================================= -->
<header id="header" class="sticky-style-2">
    <div class="container clearfix">
        <div id="logo" class="divcenter">
            <a href="/" class="standard-logo" data-dark-logo="/img/logo.png">
                <img class="divcenter" src="/img/logo.png" alt="El Ombu logo" height="100px" width="auto" />
            </a>
            <a href="/" class="retina-logo" data-dark-logo="/img/logo.png">
                <img class="divcenter" src="/img/logo.png" alt="El Ombu logo" />
            </a>
        </div>
    </div>
    <div id="header-wrap">

        <nav id="primary-menu" class="style-2">
            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <ul>
                    <li>
                        <a href="{{ route('ofertas') }}"><div>Ofertas</div></a>
                    </li>
                    <li>
                        <a href="{{ route('products.show') }}"><div>Productos y precios</div></a>
                    </li>
                    <li>
                        <a href="{{ route('galeria.view', 'casas') }}"><div>Galerias</div></a>
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
                        <a href="{{ route('complejos.show', 'zafiro') }}"><div>Complejos turisticos</div></a>
                        <ul>
                            <li><a href="{{ route('complejos.show', 'zafiro') }}"><div>Complejo Zafiro</div></a></li>
                            <li><a href="{{ route('complejos.show', 'onix') }}"><div>Complejo Onix</div></a></li>
                            <li><a href="{{ route('complejos.show', 'esmeralda') }}"><div>Complejo Esmeralda</div></a></li>
                            <li><a href="{{ route('complejos.show', 'rubi') }}"><div>Complejo Rubí</div></a></li>
                            <li><a href="{{ route('complejos.show', 'cornalina') }}"><div>Complejo Cornalina</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('laEmpresa') }}"><div>Nuestra empresa</div></a>
                    </li>
                    <li>
                        <a href="{{ route('fichaTecnica') }}"><div>Tipos de constricción</div></a>
                        <ul>
                            <li><a href="{{ route('fichaTecnica') }}"><div>Ficha tecnica</div></a></li>
                            <li><a href="{{ route('vivienda') }}"><div>Vea como se construye su vivienda en 9 pasos</div></a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('formasDePago') }}"><div>Plan 50</div></a></li>
                    <li>
                        <a href="{{ route('contact.index') }}"><div>Contacto</div></a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</header>
<!-- #header end -->