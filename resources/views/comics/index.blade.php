@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('main')
    <div>
        <img src="https://static.dc.com/2024-07/2024_07_11_Marquee_3x1.jpg?w=1200" alt="DC logo" class="w-100">
    </div>
    <div id="section-2">
        <div class="container position-relative pt-5">
            <div class="bg-main text-light fw-bold fs-4 px-4 py-1 cur-series">CURRENT SERIES</div>
            <div class="row">
                @foreach ($comics as $comic )
                    <div class="col-2 p-4">
                        <a href="{{route('comics.show',$comic->id)}}">
                            <figure>
                                <img src="{{$comic->thumb}}" alt="">
                            </figure>
                            <div class="text-light fw-semibold">
                                {{$comic->title}}
                            </div>
                        </a>
                    </div>
    
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-main py-5" id="section-3">
        <div class="container text-light">
            <div class="row">
                <div class="col-auto">
                    <i class="fa-solid fa-tablet-screen-button"></i>
                </div>
                <div class="col py-3 me-5">
                    DIGITAL COMICS
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <div class="col py-3 me-5">
                    DC MERCHANDISE
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-user-pen"></i>
                </div>
                <div class="col py-3 me-5">
                    SUBSCRIPTION
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="col-auto py-3 me-5">
                    COMIC SHOP LOCATOR
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div class="col-auto py-3 me-5">
                    DC POWER VISA
                </div>
            </div>
        </div>
    </div>
@endsection