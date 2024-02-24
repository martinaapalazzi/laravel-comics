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
<section>
    <div class="container-assets d-flex justify-content-around">
        <div class="d-flex justify-content-around align-items-center">
            <div class="single-asset d-flex align-items-center">
                <div class="img-asset-container">
                    <img src="{{ Vite::asset('public/images/buy-comics-digital-comics.png') }}" alt="jumbotron">
                </div> 
                <div>
                    DIGITAL COMICS
                </div>
            </div>
            <div class="single-asset d-flex">
                <div class="img-asset-container">
                    <img src="{{ Vite::asset('public/images/buy-comics-merchandise.png') }}" alt="jumbotron">
                </div> 
                <div>
                    DC MERCHANDISE
                </div>
            </div>
            <div class="single-asset d-flex">
                <div class="img-asset-container">
                    <img src="{{ Vite::asset('public/images/buy-comics-subscriptions.png') }}" alt="jumbotron">
                </div> 
                <div>
                    SUBSCRIPTION
                </div>
            </div>
            <div class="single-asset d-flex">
                <div class="img-asset-container">
                    <img src="{{ Vite::asset('public/images/buy-comics-shop-locator.png') }}" alt="jumbotron">
                </div> 
                <div>
                    COMIC SHOP LOCATOR
                </div>
            </div>
            <div class="single-asset d-flex">
                <div class="img-asset-container">
                    <img src="{{ Vite::asset('public/images/buy-dc-power-visa.svg') }}" alt="jumbotron">
                </div> 
                <div>
                    DC POWER VISA
                </div>
            </div>
        </div>
    </div>      
 </section>

@endsection
