@extends('layouts.app')
@section('content')
@include('include.messages')
<button class="btn btn-primary" onclick="goBack()">Go Back</button>
<br>
<br>
<div class="card">
    <div class="card-header">
        <h2>Edit Post Form</h2>
    </div>
    <div class="card-body">
        <form action="/laravelpracticeapp/public/posts/{{$post->id}}" method="POST">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:
                </label>
                <input type="text" value="{{$post->title}}" name="title" class="form-control" placeholder="title">
            </div>
            <div class="form-group">
                <label for="body">Body:
                </label>
                <textarea id="editor" name="body" placeholder="body"></textarea>
            </div>
            {{-- {{Form::hidden('_method', 'PUT')}} --}}
            <button class="btn btn-primary form-control">Update</button>
        </form>
    </div>
</div>
<script>
    document.getElementById('editor').value = "{!!$post->body!!}";    
</script>
@include('include.backfunc')
@endsection