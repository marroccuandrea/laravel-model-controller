@extends('layout.main')

@section('content')
    <div class="container my-5">
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card mb-5 " style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-text">{{ $movie->title }}</h5>
                            <h6 class="card-text">{{ $movie->original_title }}</h6>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
