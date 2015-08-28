@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Crear producto</h1>
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

@section('scripts')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("shortDescription"),
            spellChecker: false,
            toolbar: toolbar
        });
        simplemde.render();

        var simplemde2 = new SimpleMDE({
            element: document.getElementById("longDescription"),
            spellChecker: false,
            toolbar: toolbar
        });
        simplemde.render();
    </script>
@endsection