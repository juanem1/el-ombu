@extends('layout/back')

@section('content')
    <section id="page-title" class="page-title-mini">
        <div class="container clearfix">
            <h1>Administrar ofertas</h1>
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
                            <th>Precio</th>
                            <th class="text-center">Producto</th>
                            <th class="text-center">Ver / Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($offers as $offer)
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td>{{ $offer->title }}</td>
                            <td>$ {{ $offer->price }}</td>
                            <td class="text-center">
                                <a class="button button-3d button-mini button-rounded button-amber" data-toggle="tooltip" title="Producto asociado: {{$offer->products->title}}" href="{{ route('products.edit', $offer->product_id) }}">
                                    <i class="icon-shop"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="button button-3d button-mini button-rounded button-dirtygreen" data-toggle="tooltip" title="Ver/Editar oferta" href="{{ route('offers.edit', $offer->id) }}">
                                    <i class="icon-pencil2"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                {!! Form::open(['route' => ['offers.destroy', $offer->id], 'method' => 'DELETE']) !!}
                                <button class="button button-3d button-mini button-rounded button-red" type="submit" data-toggle="tooltip" title="Eliminar oferta">
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