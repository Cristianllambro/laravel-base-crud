@extends('template.base')
@section('pageTitle', $comic->title)
@section('contentMain')
<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col">
            <div class="card mb-3" style="width: 1000px;">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{$comic->thumb}}" class="w-100 rounded" alt="{{$comic->title}}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Title: {{$comic->title}}</h2>
                            <p class="card-text">Description: {{$comic->description}}</p>
                            <p class="card-text">Price: ${{$comic->price}}</p>
                            <p class="card-text">Series: {{$comic->series}}</p>
                            <p class="card-text">Sale date: {{$comic->sale_date}}</p>
                            <p class="card-text">Type: {{$comic->type}}</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection