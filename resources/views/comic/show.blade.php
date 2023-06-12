@extends('layout.main')

@section('content')
    <div class="container">

        <div class="card mb-3" style="max-width: 100%;">

            <div class="row">
                <div class="col">
                    <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start w-100" alt="nome">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">{{ $comic['title'] }}</h4>
                        <p class="card-text">{{ $comic['description'] }}</p>
                        <h4>Autori</h4>
                        <ul class="d-flex flex-wrap gap-5">
                            @foreach (explode('|',$comic['artists']) as $artist )
                            <li>{{ $artist }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('comic.index')}}" class="btn btn-warning">Torna alla lista</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
