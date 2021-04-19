@extends('layouts.app')
@section('content')
@include('include.messages')
@if (count($posts) > 0)
@foreach ($posts as $post)
<div class="card">
    <div class="card-header">
        {{Auth::user()->name}}
    </div>
    <div class="card-body">
        <h3><a href="/laravelpracticeapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Created {{$post->created_at->diffForHumans()}}</small>
        {{-- <small>Wriiten on {{$post->created_at->toTimeString()}}</small> --}}
    </div>
</div>
@endforeach
<br>
{{$posts->links()}}
@else
<h3>No posts</h3>
@endif
@endsection