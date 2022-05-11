@extends('template.base')
@section('pageTitle', 'Create New Comics')
@section('contentMain')
<form>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" >
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" >
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" >
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-control" id="series" name="series" >
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">sale_date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" >
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-control" id="type" name="type" >
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Submit</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection