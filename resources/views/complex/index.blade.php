@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar complejos</h1>
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
                            <th>Precio</th>
                            <th>Galeria asociada</th>
                            <th class="text-center">Ver / Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($complexes as $complex)
                        <tr>
                            <td>{{ $complex->id }}</td>
                            <td>{{ $complex->title }}</td>
                            <td>$ {{ $complex->price }}</td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver galeria asociada" href="{{ route('gallery.show', $complex->gallery_id) }}">
                                    <i class="icon-line-stack-2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver/Editar complejo" href="{{ route('complex.edit', $complex->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Eliminar complejo" href="{{ route('complex.destroy', $complex->id) }}">
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