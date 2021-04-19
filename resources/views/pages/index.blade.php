@extends('layouts.app')
@section('content')
@include('include.messages')
<div class="jumbotron text-center">
    <h1>{{$title.'!'}}</h1>
    <p>This is the Index Page!</p>
    {{-- <a class="btn btn-primary btn-lg" href="/">Login</a>
    <a class="btn btn-success btn-lg" href="/laravelpracticeapp/public/register">Register</a> --}}
</div>
@endsection