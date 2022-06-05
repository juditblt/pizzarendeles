@extends('admin.layout')

@section('content')
    <hr>
    <section class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>A 'pizzarendelés' alkalmazás felhasználói</h3>

            <table class="table table-sm">
                <tr>
                    <th>Név</th>
                    <th>E-mail</th>
                    <th class="text-center">Jogosultság</th>
                    <th class="text-center">Felhasználó törlése</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td class="align-middle" >{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->email }}</td>
                        <td class="text-center align-middle">{{ $user->role }}</td>
                        <td class="text-center align-middle">
                            <form action="{{ route('admin.users.delete', ['id' => $user->id])  }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <input class="btn btn-danger btn-sm m-2" type="submit" value="Töröl">
                            </form>
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
