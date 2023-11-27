@extends('main')

@section('container')
    <p>{{ $book->id }}</p>
    <p>{{ $book->judul }}</p>
    <p>{{ $book->penerbit }}</p>
    <p>{{ $book->stokc }}</p>
@endsection