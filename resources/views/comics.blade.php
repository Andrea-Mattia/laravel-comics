@extends('layouts.main')

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="comics">
                @foreach ($comics as $comic)
                    <div class="comic">
                        <img src="{{ $comic['image'] }}" alt="">
                        <h4 class="img-title">{{ $comic['title'] }}</h4>
                    </div>
                @endforeach
                <button class="btn ttu">load more</button>
            </div>
        </div>
    </section>
@endsection