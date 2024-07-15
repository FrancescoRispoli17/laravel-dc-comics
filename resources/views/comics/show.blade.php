@extends('layouts.app')

@section('page-title')
    Show
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <div>{{$comic->title}}</div>
                <p>{{$comic->description}}</p>
                <a href="{{route('comics.index')}}">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection