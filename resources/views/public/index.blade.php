@extends('public.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-2">
            <img src="IMG/pizza3a.jpg" class="img-thumbnail mt-5" alt="pizza">
        </div>
        <div class="col-sm-12 col-md-8">
            <h3>Az 'pizzarendelés' alkalmazásban rendelhető pizzák</h3>
            <h4>Ha rendelni szeretne, jelentkezzen be!</h4>

            <table class="table table-sm">
                <tr>
                    <th>Név</th>
                    <th>Leírás</th>
                    <th class="text-center">Ár</th>
                </tr>
                @foreach($pizzas as $pizza)
                <tr>
                    <td class="align-middle">{{ $pizza->name }}</td>
                    <td class="align-middle">{{ $pizza->description }}</td>
                    <td class="text-center align-middle">{{ $pizza->price }} Ft</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-sm-12 col-md-2">
            <img src="IMG/pizza3b.jpg" class="img-thumbnail mt-5" alt="pizza">
        </div>
    </section>
@endsection


