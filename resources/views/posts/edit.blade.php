@extends('layouts.app')

@section('content')
    <h3>Edit Post</h3>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title');}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('content', 'Content');}}
            {{Form::textarea('content', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::file('cover_image');}}
        </div>
        <br>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary']);}}
    {!! Form::close() !!}
@endsection