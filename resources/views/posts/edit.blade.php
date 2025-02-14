@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            <input type="text" value= {{$post->content}} class="form-control" name="content">
            <input type="hidden" value="{{ $post->id }}" name="user_id">

            <button class="btn btn-success my-3">Edit</button>
        </form>
@endsection 
