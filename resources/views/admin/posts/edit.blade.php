@extends('layouts.admin')

@section('content')

<div class="mt-4">
    <h2>Edit - {{$post->title}}</h2>
    @include('partials.errors')

    <form action="{{route('admin.posts.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-goup">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"  placeholder="Learn php article" aria-describedby="titleHelper" value="{{old('title', $post->title)}}">
            <small id="titleHelper" class="text-muted">Type the post title, max 150 characters</small>
        </div>

        <div class="d-flex my-4">
            <div class="media mr-4">
                <img class="shadow" src="{{$post->cover_img}}" alt="{{$post->title}}">
            </div>
            <div class="form-goup">
                <label for="cover_img">Cover Image</label>
                <input type="text" name="cover_img" id="cover_img" class="form-control @error('cover_img') is-invalid @enderror" placeholder="Learn php article" aria-describedby="cover_imgHelper" value="{{old('cover_img', $post->cover_img)}}">
                <small id="cover_imgHelper" class="text-muted">Type the post title, max 150 characters</small>
            </div>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="4">{{old('content', $post->content)}}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary ">Add Post</button>

    </form>
</div>

@endsection