@extends('layout.login')
@section('title','login')
@section('konten')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{session::get('success')}}
        </div>
    @endif
    <form action="{{route('create')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name"  required id="">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name"  required id="">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required id="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <center>
            <button class="m-auto btn btn-danger rounded-0 w-100" >Sign In</button>
            <a href="{{route('sesi')}}" class="text-danger" style="margin-top: 10px"><b>Login</b></a>
        </center>
    </form>
@endsection

