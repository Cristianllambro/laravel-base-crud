@extends('template.base')
@section('pageTitle', 'Home Comics')
@section('contentMain')
    <div class="container">
        <div class="row g-4">
            @foreach ($comic as $item)
            <div class="col-4">
                <div class="card h-100" style="width: 22rem;">
                    <img src="{{$item->thumb}}" class="card-img-top" alt="{{$item->title}}">
                    <div class="card-body">
                        <h5 class="card-title">Title: {{$item->title}}</h5>
                        <p class="card-text">Price: $ {{$item->price}}</p>
                        <p class="card-text">Series: {{$item->series}}</p>
                        <p class="card-text">Type: {{$item->type}}</p>
                        <a href="{{route('comics.show', $item->id)}}" class="btn btn-primary">Info</a>
                        <a href="{{route('comics.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="confirmDelete()" >Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$comic->links()}}
    </div>

@endsection