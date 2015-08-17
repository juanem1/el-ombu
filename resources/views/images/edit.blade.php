@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Editar Imagen</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div>
                    <label for="">Imagen Actual</label>
                    <img width="100%" height="auto" src="/img/images/{{ $model->name }}" alt="" />
                </div>

                <hr/>

                {!! form($form) !!}

            </div>
        </div>
    </section>

@endsection