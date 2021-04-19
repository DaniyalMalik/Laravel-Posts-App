@extends('layouts.app')
@section('content')
@include('include.messages')
<button class="btn btn-primary" onclick="goBack()">Go Back</button>
<br>
<br>
<div class="card">
    <div class="card-header">
        <h3>{{$post->title}}</h3>
    </div>
    <div class="card-body">
        <p>{!!$post->body!!}</p>
        <small>Created {{$post->created_at}}</small>
    </div>
</div>
<hr>
<div class="btn-group">
    <a href="/laravelpracticeapp/public/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
    <form action="/laravelpracticeapp/public/posts/{{$post->id}}" method="POST">
        {{method_field('DELETE')}}
        {{ csrf_field() }}
        {{-- <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="submit" value="Delete" class="btn btn-danger">
</div>
</form>
@include('include.backfunc')
@endsection