@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header font-weight-bolder">Registration Form</div>
    <div class="card-body">
        <form action="/laravelpracticeapp/public/register" method="post">
            {{-- <form action="{{route('register.store')}}" method="post"> --}}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control @error('name') text-danger border-danger @enderror" type="text"
                    value="{{old('name')}}" name="name" id="">
                @error('name')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
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
            <div class="form-group">
                <label for="password_confirmation">Repeat Password:</label>
                <input class="form-control" type="password" name="password_confirmation" id="">
            </div>
            <div class="form-group">
                <input class="form-control btn btn-secondary" type="submit" name="submit" value="Register" id="">
            </div>
        </form>
    </div>
</div>
@endsection