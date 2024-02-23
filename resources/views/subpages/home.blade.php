@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<section>
    <div class="container">
        <div class="cards d-flex">
            @foreach($comics as $index => $comic) 
                <div class="mycard">
                    <div class="img-container">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div>
                        {{ $comic['title']}}
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

@endsection
