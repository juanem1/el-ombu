<header id="header" class="sticky-header">
    <div id="header-wrap">
        <nav id="primary-menu" class="style-2">
            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <ul>
                    <li class="current">
                        <a href="/"><div>Home</div></a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.index') }}"><div>Dashboard</div></a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}"><div>Productos</div></a>
                        <ul>
                            <li><a href="{{ route('products.create') }}"><div>Crear producto</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('offers.index') }}"><div>Ofertas</div></a>
                        <ul>
                            <li><a href="{{ route('offers.create') }}"><div>Crear oferta</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('complex.index') }}"><div>Complejos</div></a>
                        <ul>
                            <li><a href="{{ route('complex.create') }}"><div>Crear complejo</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}"><div>Galerias</div></a>
                        <ul>
                            <li><a href="{{ route('gallery.create') }}"><div>Crear galeria</div></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('images.index') }}"><div>Imagenes</div></a>
                        <ul>
                            <li><a href="{{ route('images.create') }}"><div>Cargar imagen</div></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- #header end -->