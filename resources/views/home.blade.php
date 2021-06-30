@extends('layout.main')

@section('content')

<main>

    <div class="wrap">

        <h1>CURRENT SERIES</h1>

        @foreach ( $dc_comics as $comic)
            
            <div class="card">
                <a href="#" class="image"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}"></a>
                <h2>{{ strtoupper($comic['series']) }}</h2>
            </div>

        @endforeach
        
    </div>

    <div class="load">
        <button>LOAD MORE</button>
    </div>

</main>

@endsection