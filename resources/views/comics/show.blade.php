@extends('layouts.app')

@section('page-title')
    Show
@endsection

@section('main')
    <div class="container pt-4" id="show-page">
        <div class="row">
            <div class="col-auto">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" width="500px">
            </div>
            <div class="col">
                <div class="fw-bold text-uppercase text-second">{{$comic->type}}</div>
                <div class="h1 display-4 mt-3 fw-bold lh-1 mb-4 text-uppercase">{{$comic->title}}</div>
                <p class="fw-bold text-second">{{$comic->description}}</p>
                <a href="{{route('comics.index')}}">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection