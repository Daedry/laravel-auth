@extends('layouts.admin')

@section('content')

<div class="container">

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Content</th>
            <th>Cover Image</th>
            <th>Acrions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->content}}</td>
            <td><img width="180px" src="{{$post->cover_image}}" alt="Cover image {{$post->title}}"></td>
            <td>View - Edit -Delete </td>
        </tr>
        @endforeach
</table>

</div>

@endsection