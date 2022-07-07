@extends('layouts.base')

@section('page-title')
    Home
@endsection

@section('page-content')

    <div class="main-jumbo"></div>
    <div class="main_up-section_container">
        <div class="main_up-section">
            <h2 class="main-title">CURRENT SERIES</h2>

            @foreach ($comics as $comic)
                <div class="card">
                    <img class="card-img" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <p>{{$comic['series']}}</p>
                </div>
            @endforeach
            
            <a class="main-button" href="#">LOAD MORE</a>
        </div>
    </div>
    <div class="main_down-section_container">
        <div class="main_down-section">
            <a href="#"><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">DIGITAL COMICS</a>
            <a href="#"><img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">DC MERCHANDISE</a>
            <a href="#"><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">SUBSCRIPTION</a>
            <a href="#"><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">COMIC SHOP LOCATOR</a>
            <a href="#"><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">DC POWER VISA</a>
        </div>
    </div>

@endsection