@extends('layout')

@section('title', 'Danh sách sách')

@section('content')
    <h1>Danh sách sách theo loại sách</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} - Tác giả: {{ $book->author }}</li>
        @endforeach
    </ul>
@endsection