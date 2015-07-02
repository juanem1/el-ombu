@extends('app')

@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>Dashboard</h1>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="bottommargin clearfix">
                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="{{ route('products.index') }}">
                                <i class="noborder icon-shop"></i>
                            </a>
                        </div>
                        <h3>Productos<span class="subtitle">Administrar productos</span></h3>
                    </div>
                </div>

                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="{{ route('offers.index') }}">
                                <i class="noborder icon-megaphone"></i>
                            </a>
                        </div>
                        <h3>Ofertas<span class="subtitle">Administrar ofertas</span></h3>
                    </div>
                </div>

                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="{{ route('image.index') }}">
                                <i class="noborder icon-photo"></i>
                            </a>
                        </div>
                        <h3>Imagenes<span class="subtitle">Administrar imagenes</span></h3>
                    </div>
                </div>

                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="{{ route('complex.index') }}">
                                <i class="noborder icon-users"></i>
                            </a>
                        </div>
                        <h3>Complejos<span class="subtitle">Administrar complejos</span></h3>
                    </div>
                </div>

                <div class="col_one_fifth nobottommargin col_last">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <a href="{{ route('gallery.index') }}">
                                <i class="noborder icon-line-stack-2"></i>
                            </a>
                        </div>
                        <h3>Galerias<span class="subtitle">Administrar galerias</span></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection