@extends('layouts.app');

@section('content')

    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            
        @endif
        @auth  
            <a href="{{ route('posts.create') }}" class="h5">Create Post+</a>
        @endauth

        <h1 class="mt-4">Posts</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
            
                <div class="card my-3">
                    <div class="card-body">

                        <h3 class="card-title">{{ $post->user->name ?? "Guest" }}</h3>
                        
                        <h3 class="card-title">{{ $post->content }}</h3>
                        <small>Written on {{$post->created_at}}</small>

                        @auth
                            @if($post->user_id == auth()->user()->id)
                            <a href={{ url("/posts/$post->id/edit") }}>Edit</a>
                            <a href="{{ url("/posts/$post->id/delete")}}" class="btn btn-danger float-end ms-2">Delete</a>
                            @endif

                            <a href="{{ url("/posts/$post->id/like")}}" class="btn btn-primary float-end">Like</a>
                        @endauth
                    </div>
                </div>
            @endforeach
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection
