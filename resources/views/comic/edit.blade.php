@extends('layout.main')

@section('content')

    <div class="container">


        <form action="{{ route('comic.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <h1 class="my-4">Prodotto da modificare :
                <span class="fw-bold">
                    "{{ $comic->title }}"
                </span>
            </h1>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">

                    @foreach ($errors->all() as $error)
                        <p> Errore di tipo ->{{ $error }}</p>
                    @endforeach

                </div>
            @endif


            <div class="mb-3">
                <label for="title" class="form-label">Titolo fumetto </label>
                <input
                    type="text"
                    list="title_list"
                    class="form-control"
                    id="title"
                    name="title"
                    placeholder="Titolo"
                    value="{{ old('title', $comic->title)}}"
                    >

                <datalist id="title_list">
                    <option value="titolo test">Test</option>
                </datalist>

                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Path immagine </label>
                <input
                    type="text"
                    class="form-control"
                    id="thumb"
                    name="thumb"
                    placeholder="Path immagine"
                    value="{{ old('thumb', $comic->thumb)}}"
                    >
                @error('thumb')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo </label>
                <input
                    type="text"
                    class="form-control"
                    id="price"
                    name="price"
                    placeholder="Prezzo"
                    value="{{ old('price', $comic->price)}}"
                    >

                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie </label>
                <input
                    type="text"
                    class="form-control"
                    id="series"
                    name="series"
                    placeholder="Serie"
                    value="{{ old('series', $comic->series)}}"
                    >

                @error('series')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita </label>
                <input
                    type="text"
                    class="form-control"
                    id="sale_date"
                    name="sale_date"
                    placeholder="YYYY-MM-DD"
                    value="{{ old('sale_date', $comic->sale_date)}}"
                    >

                @error('sale_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Categoria </label>
                <input
                    type="text"
                    class="form-control"
                    id="type"
                    name="type"
                    placeholder="Categoria"
                    value="{{ old('type', $comic->type)}}"
                >
                @error('type')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti </label>
                <input
                    type="text"
                    class="form-control"
                    id="artists"
                    name="artists"
                    placeholder="Artista"
                    value="{{ old('artists', $comic->artists)}}"
                    >

                @error('artists')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori </label>
                <input
                    type="text"
                    class="form-control"
                    id="writers"
                    name="writers"
                    placeholder="Scrittori"
                    value="{{ old('writers', $comic->writers)}}"
                    >

                @error('writers')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione </label>
                <textarea
                    class="form-control"
                    name="description"
                    id="description"
                    cols="30"
                    rows="2"
                    placeholder="Inserisci una descrizione">
                    {{old('description', $comic->description)}}
                </textarea>

                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-end my-2">
                <button type="submit" class="btn btn-success">Aggiungi</button>
            </div>

        </form>

    </div>
@endsection
