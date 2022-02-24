@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <br>
    <br>
    <div class="card text-center">
        <div class="card-header">
            <img src="/storage/cover_images/{{$post->cover_image}}" alt="Cover Image" width="100%"/>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{!!$post->body!!}</p>
            @if (!Auth::guest())
                @if (Auth::user()->id == $post->user_id)
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-success float-start">Edit</a>
                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-end']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger']);}}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
        <div class="card-footer text-muted">
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
    </div>
@endsection