@extends('main')

@section('container')
<h1>Create new book</h1>
<form method="post" action="/books">
    <div class="mb-3">
        @csrf
      <label for="judul" class="form-label">Judul</label>
      <input name="judul" type="text" class="form-control" id="judul">
    </div>
    <div class="mb-3">
      <label for="penerbit" class="form-label">Penerbit</label>
      <input name="penerbit" type="text" class="form-control" id="penerbit">
    </div>
    <div class="mb-3">
      <label for="stock" class="form-label">Stock</label>
      <input name="stock" type="text" class="form-control" id="stock">
    </div>
    <button type="submit" class="btn btn-primary">Create new book</button>
  </form>
@endsection