@extends('layouts.admin')

@section('content')

<h2>Create a new Post</h2>

<form action="{{route('admin.posts.store')}}" method="post">
    @csrf
     
    <div class="form-goup">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Learn php article" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Type the post title, max 150 characters</small>
    </div>

    <div class="form-goup">
        <label for="cover_image">Cover Image</label>
        <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="Learn php article" aria-describedby="cover_imageHelper">
        <small id="cover_imageHelper" class="text-muted">Type the post title, max 150 characters</small>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-primary ">Add Post</button>

</form>

@endsection