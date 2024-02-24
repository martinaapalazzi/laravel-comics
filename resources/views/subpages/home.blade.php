@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<section>
    <div class="container">
        <div class="cards d-flex">
            @foreach($comics as $index => $comic) 
                <div class="mycard">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    <div>
                        {{ $comic['series']}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex align-items-center p-3">
            <button class="button">Load  more</button>
        </div>
    </div>
</section>

@endsection
