@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if (count($posts) > 0)
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="Cover Image">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">
                                {!!$post->body!!}
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </p>
                            <a href="/posts/{{$post->id}}" class="btn btn-primary">View Post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection