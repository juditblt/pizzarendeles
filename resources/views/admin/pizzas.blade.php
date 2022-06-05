@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <a class="btn btn-primary m-2" href="{{ route('admin.pizzas.create') }}">Új pizza felvétele a kínálatba</a>
        </div>
    </section>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">

            <h3>A 'pizzarendelés' alkalmazásban rendelhető pizzák</h3>

            <table class="table table-sm">
                <tr>
                    <th>Név</th>
                    <th>Leírás</th>
                    <th class="text-center">Ár</th>
                    <th class="text-center">Elérhető mennyiség</th>
                </tr>
                @foreach($pizzas as $pizza)
                    <tr>
                        <td class="align-middle">{{ $pizza->name }}</td>
                        <td class="align-middle">{{ $pizza->description }}</td>
                        <td class="text-center align-middle">{{ $pizza->price }} Ft</td>
                        <td class="text-center align-middle">{{ $pizza->quantity }} db</td>
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
