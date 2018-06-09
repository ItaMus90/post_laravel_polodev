@extends('master')
@section('content')
    <h2 class="my-3">Update the post</h2>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif
    <form action="{{route('posts.update',$post->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$post->title}}" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="contnet">Contnet</label>
            <textarea name="contnet" id="contnet" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-info">Update the post</button>
        </div>
    </form>
@endsection