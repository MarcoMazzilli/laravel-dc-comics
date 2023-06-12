@extends('layout.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">titolo</th>
                <th scope="col">serie</th>
                <th scope="col">data di uscita</th>
                <th scope="col">prezzo</th>
                <th scope="col">cta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic )

            <tr>
                <th scope="row">{{ $comic['id'] }}</th>
                <td>{{ $comic['title'] }}</td>
                <td>{{ $comic['series'] }}</td>
                <td>{{ $comic['sale_date'] }}</td>
                <td>{{ $comic['price'] }}</td>
                <td><a href="#" class="btn btn-primary">Dettagli</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
