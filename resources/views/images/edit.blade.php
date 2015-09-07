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

                <div class="style-msg infomsg">
                    <div class="sb-msg">
                        <i class="icon-info-sign"></i>
                        El tamaño maximo de cada imagen no puede superar 1MB.
                        Recomendamos usar esta herramienta de compresion: <a href="https://compressor.io/" target="_blank">https://compressor.io/</a>
                    </div>
                </div>

                {!! form($form) !!}

            </div>
        </div>
    </section>

@endsection