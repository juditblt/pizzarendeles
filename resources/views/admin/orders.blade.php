@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>A 'pizzarendelés' alkalmazás megrendelései</h3>

            <table class="table table-sm">
                <tr>
                    <th>Időpont</th>
                    <th>Megrendelő</th>
                    <th>Cím</th>
                    <th>Pizza</th>
                    <th class="text-center">Darabszám</th>
                    <th class="text-center">Státusz</th>
                    <th class="text-center">Elkészült</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td class="align-middle">{{ $order->created_at }}</td>
                        <td class="align-middle">{{ $order->user->name }}</td>
                        <td class="align-middle">{{ $order->address }}</td>
                        <td class="align-middle">{{ $order->pizza->name }}</td>
                        <td class="text-center align-middle">{{ $order->order_quantity }}</td>
                        <td class="text-center align-middle">{{ $order->approval }}</td>
                        <td class="text-center align-middle">
                            @if($order->approval == 'prepare')
                            <form action="{{ route('admin.orders.done', ['id' => $order->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <input class="btn btn-danger btn-sm m-2" type="submit" value="Kész!">
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <a class="btn btn-primary m-2" href="{{ route('admin') }}">
                Vissza
            </a>
        </div>
    </section>


@endsection
