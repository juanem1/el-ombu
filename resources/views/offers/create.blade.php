@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Crear Oferta</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                @include('errors.list')

                {!! form($form) !!}
            </div>
        </div>
    </section>

@endsection