@extends('layout')
@section('title', isset($author) ? 'Update Author '.$author->author.' or name book':'Create author and book')

@section('content')
    <a type="button" class="btn btn-info" href="{{route('authors.index')}}">Back to authors amd books</a>
   <form method="POST"
         @if(isset($author))
         action="{{route('authors.update', $author)}}"
         @else
         action="{{route('authors.store')}}"
         @endif
         class="mt-3">
       @csrf
       @isset($author)
           @method('PUT')
       @endisset
    <div class="row">
        <div class="col">
            <input name="author"
                   value="{{isset($author) ? $author->author:null}}"
                   type="text" class="form-control" placeholder="Author" aria-label="Author">
        </div>
        <div class="col">
            <input name="nameBook"
                   value="{{isset($author) ? $author->nameBook : null}}"
                   type="text" class="form-control" placeholder="Book name" aria-label="Book name">
        </div>

    </div>
<div class="row mt-3">
    <div class="col">

    <button type="submit" class="btn btn-success">Create</button>
    </div>
</div>
   </form>
@endsection
