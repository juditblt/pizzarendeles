@extends('private.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>Itt adhatja le rendelését</h3>

            <form action="{{ route('private.store') }}" method="post">
                @csrf
            <table class="table table-sm">
                <tr>
                    <th>Név, leírás, ár</th>
                    <th>Rendelés db</th>
                </tr>
                <tr>
                    <td>
                        <select name="p_id" id="p_id">
                            @foreach($pizzas as $pizza)
                            <option value="{{ $pizza->id }}">
                                {{ $pizza->name }}: {{ $pizza->description }} - {{ $pizza->price }} Ft
                            </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantity" id="quantity" min="1" max="15">
                    </td>
                </tr>
            </table>
            <h4>Kérjük adja meg, hova kéri a rendelést!</h4>

            <label for="address" class="fw-bold">Cím:</label>
            <input type="text" name="address" id="address" size="50">
            <br>
            <br>
            <input class="btn btn-primary m-2" type="submit" value="Megrendelés leadása">
            </form>
        </div>
    </section>
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8 m-2">
            <h3>Itt tekintheti meg összes rendelését</h3>

            <a class="btn btn-primary m-2" href="{{ route('private.show') }}">
                Rendelései
            </a>
        </div>
    </section>
@endsection
