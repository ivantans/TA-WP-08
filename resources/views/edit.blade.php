@extends('main')

@section('container')
<h1>Edit book</h1>
<form method="post" action="/books/{{ $book->id }}">
    @csrf
    @method("put")
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input name="judul" type="text" class="form-control" id="judul" value="{{ $book->judul }}">
    </div>
    <div class="mb-3">
      <label for="penerbit" class="form-label">Penerbit</label>
      <input name="penerbit" type="text" class="form-control" id="penerbit" value="{{ $book->penerbit }}">
    </div>
    <div class="mb-3">
      <label for="stock" class="form-label">Stock</label>
      <input name="stock" type="text" class="form-control" id="stock" value="{{ $book->stock }}">
    </div>
    <button type="submit" class="btn btn-primary">Edit book</button>
  </form>
@endsection