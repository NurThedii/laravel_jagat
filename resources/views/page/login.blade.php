@extends('layout.login')
@section('title','login')
@section('konten')
    @if (Session::has('error'))
    <div class="alert alert-danger">
        {{session::get('error')}}
    </div>
    @endif
    <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <center>
            <button class="m-auto btn btn-danger rounded-0 w-100" type="submit">Sign In</button>
            <a href="{{route('register')}}" class="text-danger" style="margin-top: 10px"><b>Create Account</b></a>
        </center>
    </form>
@endsection

