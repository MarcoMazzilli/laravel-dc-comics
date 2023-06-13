@extends('layout.main')

@section('content')
    <div class="container-fluid p-3">
        <a href="{{ route('comic.create')}}" class="btn btn-success">Create New Product <i class="fa-solid fa-plus"></i></a>
    </div>
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
                {{-- Buttons --}}
                <td>
                    <a href="{{ route('comic.show', $comic) }}" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>

                    <a href="{{ route('comic.edit', $comic) }}" class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a>

                    <form
                        class="d-inline"
                        action="{{ route('comic.destroy', $comic) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white"><i class="fa-solid fa-trash"></i></button>
                    </form>

                    </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
