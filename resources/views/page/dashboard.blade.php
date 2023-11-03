@extends('layout.dashboard')
@section('title','dashboard')
@section('konten')
<div class="container">
    <img src="{!! asset('component/banner.png') !!}" style="width:100%; margin-top:50px;" alt="">
    <div class="item">
        <center>
            <div class="tengah " style="margin-top:100px; ">
                <h2>Product Popular</h2>
                <button class="btn btn-outline-danger rounded-0" style="background-color:white; margin-top:10px; width:200px; "> View All </button>
            </div>
        </center>
        <div class="row">
            @foreach ($data as $item )
            <div class="col-md-4 text-center">
                <div class="kotak m-3">
                <img src="{{asset('foto_barang/'.$item->foto_barang)}}" style="height: 200px" class="w-50 m-auto" alt="">
                <button class="btn btn-danger w-50" style="border-radius: 0px;">{{$item->nama_barang}}</button><br>
                <del style="color:gray; font-size: 20px;" >IDR {{$item->harga}}</del><br>
                <b style="font-size:20px;">IDR {{$item->harga_diskon}}</b>
                </div>
                {{-- <img src="{{assets($item->foto_barang)}}" alt=""> --}}
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
