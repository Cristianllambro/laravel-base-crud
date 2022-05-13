@extends('template.base')
@section('pageTitle', 'Edit Comic')
@section('contentMain')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('comics.update', $comic->id)}}">
                @csrf
                @method('PUT')
                <div class="mb-3 pt-5">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="description">Description:</label>
                    <textarea class="form-control" placeholder="Description" id="description" name="description">{{ $comic->description }}</textarea>
                  </div>
              
                <div class="mb-3">
                      <label for="thumb" class="form-label">Image:</label>
                      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
              
                <div class="mb-3">
                      <label for="price" class="form-label">Price:</label>
                      <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
              
                <div class="mb-3">
                      <label for="series" class="form-label">Series:</label>
                      <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
              
                <div class="mb-3">
                      <label for="sale_date" class="form-label">Sale Date:</label>
                      <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
              
                <div class="mb-3">
                      <label for="type" class="form-label">Type:</label>
                      <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> 
    </div>
</div>
  
@endsection