@extends('layout')

@section('title', 'Authors')

@section('content')
    <a class="btn btn-primary" role="button" href="{{route('authors.create')}}">Create author and book</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Author</th>
            <th scope="col">Book</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
     @foreach($authors as $author)
        <tr>
            <th scope="row">{{$author->id}}</th>
            <td>{{$author->author}}</td>
            <td>{{$author->nameBook}}</td>
            <td>
                <a type="button" class="btn btn-secondary" href="{{route('authors.edit', $author)}}">Edit</a>
            </td>

        </tr>
     @endforeach
        </tbody>
    </table>
@endsection
