@extends('app')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar ofertas</h1>
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
                            <th>Producto</th>
                            <th class="text-center">Ver</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($offers as $offer)
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td>{{ $offer->title }}</td>
                            <td>{{ $offer->price }}</td>
                            <td>{{ $offer->product_id }}</td>
                            <td class="text-center">
                                <a href="{{ route('offers.show', $offer->id) }}">
                                    <i class="icon-line2-magnifier-add"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('offers.edit', $offer->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('offers.destroy', $offer->id) }}">
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