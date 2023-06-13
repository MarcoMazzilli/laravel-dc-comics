@extends('layout.main')

@section('content')

<div class="container">


    <form action="{{ route('comic.store') }}" method="POST">
        @csrf

        <h1 class="my-4">Inserisci un nuovo Fumetto</h1>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <p> Errore di tipo ->{{ $error }}</p>
            @endforeach
        </div>
        @endif


        <div class="mb-3">
            <label for="title" class="form-label">Titolo fumetto </label>
            <input type="text" list="title_list" class="form-control" id="title" name="title" placeholder="Titolo">
            <datalist id="title_list">
                <option value="titolo test">Test</option>
            </datalist>
            @error ('title')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="thumb" class="form-label">Path immagine </label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Path immagine">
            @error ('thumb')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo </label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
            @error ('price')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie </label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
            @error ('series')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita </label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
            @error ('sale_date')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Categoria </label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Categoria">
            @error ('type')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti </label>
            <input type="text" class="form-control" id="artists" name="artists" placeholder="Artista">
            @error ('artists')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori </label>
            <input type="text" class="form-control" id="writers" name="writers" placeholder="Scrittori">
            @error ('writers')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione </label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="2" placeholder="Inserisci una descrizione"></textarea>
            @error ('description')
                <p class="text-danger">{{ $message}}</p>
            @enderror
        </div>

        <div class="text-end my-2">
            <button type="submit" class="btn btn-success">Aggiungi</button>
        </div>

    </form>

</div>
@endsection
