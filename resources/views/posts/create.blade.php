@extends('layouts.app')
@section('content')
@include('include.messages')
<button class="btn btn-primary" onclick="goBack()">Go Back</button>
<br>
<br>
<div class="card">
    <div class="card-header">
        <h2>Create Post Form</h2>
    </div>
    <div class="card-body">
        <form action="/laravelpracticeapp/public/posts" method="POST">
            {{-- <form action="{{route('posts.store')}}" method="POST"> --}}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:
                </label>
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea type="text" name="body" id="editor" placeholder="body" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary form-control">Submit</button>
        </form>
    </div>
</div>
@include('include.backfunc')
@endsection