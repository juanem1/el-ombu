@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Editar galeria</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                {!! form($form) !!}
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("description"),
            spellChecker: false,
            toolbar: toolbar
        });
        simplemde.render();
    </script>
@endsection