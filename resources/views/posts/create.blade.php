@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="/posts" method="post">
            @csrf
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" placeholder="Enter post content"></textarea>
            </div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? 'gusest'}}">
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
@endsection
