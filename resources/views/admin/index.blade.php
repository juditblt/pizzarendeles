@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <table class="table table-sm">
                <tr>
                    <td class="align-middle fs-4">A 'pizzarendelés' alkalmazás felhasználói</td>
                    <td><a class="btn btn-primary btn-sm m-2" href="{{ route('admin.users') }}">Felhasználók</a></td>
                </tr>
                <tr>
                    <td class="align-middle fs-4">A 'pizzarendelés' alkalmazás megrendelései</td>
                    <td><a class="btn btn-primary btn-sm m-2" href="{{ route('admin.orders') }}">Megrendelések</a></td>
                </tr>
                <tr>
                    <td class="align-middle fs-4">A 'pizzarendelés' alkalmazásban rendelhető pizzák</td>
                    <td><a class="btn btn-primary btn-sm m-2" href="{{ route('admin.pizzas') }}">Pizzák</a></td>
                </tr>
            </table>
        </div>
    </section>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <a class="btn btn-primary m-2" href="{{ route('private.home') }}">
                Vissza
            </a>
        </div>
    </section>
@endsection
