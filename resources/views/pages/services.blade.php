@extends('layouts.app')
@section('content')
@include('include.messages')
<h1>{{$title}}</h1>
<p>This is the Services Page!</p>
<ul class="list-group">
    @if(count($Services) > 0)
    @foreach ($Services as $service)
    <li class="list-group-item">{{$service}}</li>
    @endforeach
    @endif
</ul>
@endsection