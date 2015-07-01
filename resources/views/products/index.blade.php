@extends('app')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar productos</h1>
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
                            <th>Precio</th>
                            <th>Galleria</th>
                            <th class="text-center">Ver</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>$ {{ $product->price }}</td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver galeria asociada" href="{{ route('gallery.show', $product->gallery_id) }}">
                                    <i class="icon-line-stack-2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Ver detalle del producto" href="{{ route('products.show', $product->id) }}">
                                    <i class="icon-line2-magnifier-add"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Editar producto" href="{{ route('products.edit', $product->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a data-toggle="tooltip" title="Eliminar producto" href="{{ route('products.destroy', $product->id) }}">
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