@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar imagenes</h1>
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
                            <th>Nombre</th>
                            <th class="text-center">Galeria asociada</th>
                            <th class="text-center">Ver / Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>{{ $image->name }}</td>
                            <td class="text-center">
                                <a class="button button-3d button-mini button-rounded button-amber" data-toggle="tooltip" title="Galeria asociada: {{$image->gallery->title}}" href="{{ route('gallery.edit', $image->gallery_id) }}">
                                    <i class="icon-line-stack-2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="button button-3d button-mini button-rounded button-dirtygreen" data-toggle="tooltip" title="Ver/Editar imagen" href="{{ route('images.edit', $image->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                {!! Form::open(['route' => ['images.destroy', $image->id], 'method' => 'DELETE']) !!}
                                <button class="button button-3d button-mini button-rounded button-red" type="submit" data-toggle="tooltip" title="Eliminar imagen">
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