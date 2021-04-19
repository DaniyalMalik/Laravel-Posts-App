@extends('layouts.app')
@section('content')
@include('include.messages')
<div class="card">
    <div class="card-header font-weight-bolder">Login Form</div>
    <div class="card-body">
        <form action="/laravelpracticeapp/public/login" method="post">
            {{-- <form action="{{route('register.store')}}" method="post"> --}}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input class="form-control @error('email') text-danger border-danger @enderror" type="email"
                    value="{{old('email')}}" name="email" id="">
                @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control @error('password') text-danger border-danger @enderror" type="password"
                    value="{{old('password')}}" name="password" id="">
                @error('password')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-check">
                <label for="" class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember"> Remember Me
                </label>
            </div>
            <br>
            <div class="form-group">
                <input class="form-control btn btn-secondary" type="submit" name="submit" value="Login" id="">
            </div>
        </form>
    </div>
</div>
@endsection