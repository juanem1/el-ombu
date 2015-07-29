@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar galerias</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                @include('partials.messages')

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th class="text-center">Ver / Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>{{ $gallery->title }}</td>
                            <td class="text-center">
                                <a class="button button-3d button-mini button-rounded button-dirtygreen" data-toggle="tooltip" title="Ver/Editar galeria" href="{{ route('gallery.edit', $gallery->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                {!! Form::open(['route' => ['gallery.destroy', $gallery->id], 'method' => 'DELETE']) !!}
                                <button class="button button-3d button-mini button-rounded button-red" type="submit" data-toggle="tooltip" title="Eliminar galeria">
                                    <i class="icon-line2-close"></i>
                                    Eliminar
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection