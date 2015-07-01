@extends('app')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar imagenes</h1>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Galeria asociada</th>
                            <th class="text-center">Ver</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>{{ $image->name }}</td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver galeria asociada" href="{{ route('gallery.show', $image->gallery_id) }}">
                                    <i class="icon-line-stack-2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver detalle de la imagen" href="{{ route('image.show', $image->id) }}">
                                    <i class="icon-line2-magnifier-add"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Editar imagen" href="{{ route('image.edit', $image->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Eliminar imagen" href="{{ route('image.destroy', $image->id) }}">
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