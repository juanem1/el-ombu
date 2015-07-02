@extends('app')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar galerias</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th class="text-center">Ver</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>{{ $gallery->title }}</td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver detalle del complejo" href="{{ route('gallery.show', $gallery->id) }}">
                                    <i class="icon-line2-magnifier-add"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Editar complejo" href="{{ route('gallery.edit', $gallery->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Eliminar complejo" href="{{ route('gallery.destroy', $gallery->id) }}">
                                    <i class="icon-line2-close"></i>
                                </a>
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