@extends('layouts.app')

@section('page-title')
    Create
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">thumb</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">series</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">sale date</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">type</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="type">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection