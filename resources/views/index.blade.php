@extends('main')

@section('container')
    <h1>All books</h1>
    <a href="/books/create">Create new product</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Judul</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
              <th scope="row">{{ $book->id }}</th>
              <td>{{ $book->judul }}</td>
              <td>{{ $book->penerbit }}</td>
              <td>{{ $book->stock }}</td>
              <td>
                <a href="/books/{{ $book->id }}">Show</a> |
                <a href="/books/{{ $book->id }}/edit">Edit</a> |
                <form action="/books/{{ $book->id }}" method="post" class="d-inline">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-link p-0">Delete</button>
                </form>
              </td>
            </tr>        
            @endforeach
        </tbody>
      </table>
@endsection