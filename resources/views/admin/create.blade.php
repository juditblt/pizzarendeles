@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-4 m-2">
            <h3>Itt vehet fel új pizzát a kínálatba:</h3>

            <form class="row" action="{{ route('admin.pizzas.store') }}" method="post">
                @csrf

                    <div class="col-md-12 gy-2">
                        <label for="name" class="form-label">Név:</label>
                        <input type="text" class="form-control" name="name" id="name" size="25">
                    </div>
                    <div class="col-md-12 gy-2">
                        <label for="description" class="form-label">Leírás:</label>
                        <input type="text" class="form-control" name="description" id="description" size="80">
                    </div>

                    <div class="col-md-6 gy-2">
                        <label for="price" class="form-label">Ár:</label>
                        <input type="number" class="form-control" name="price" id="price">
                    </div>
                    <div class="col-md-6 gy-2">
                        <label for="quantity" class="form-label">Mennyiség:</label>
                        <input type="number"  class="form-control"name="quantity" id="quantity">
                    </div>

                    <div class="row g-3 mx-1">
                        <div class="col-md-4">
                            <input class="btn btn-primary" type="submit" class="form-control" value="Elküld">
                        </div>
                    </div>
            </form>
        </div>
    </section>

    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <a class="btn btn-primary m-2" href="{{ route('admin.pizzas') }}">
                Vissza
            </a>
        </div>
    </section>
@endsection
