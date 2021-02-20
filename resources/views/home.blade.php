@extends('master.master')
@section('title', 'Home')

@section('content')

@if(session('alert'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('alert') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="jumbotron jumbotron-fluid mb-1" style="background-color: #072540">
    <div class="container"> 
        <div class="row">
            <div class="col-md-7">
                <h1>Selamat Datang!!!</h1>
                <h1>Anda Login Sebagai Admin.</h1>
                <p>Klik <i>Lihat Data Siswa</i> untuk melihat data.</p>
                <a class="btn btn-info" href="/datasiswa">Lihat Data Siswa</a>
            </div>
            <div class="col-md-5 text-center">
                <img src="/image/logo_smk.png" height="190px">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col-md-12 text-center">
            <p class="" style="font-size: 20px;"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat... .</i></p>
            <a class="btn btn-info" href="/about">Lanjut Membaca</a>
        </div>
    </div>
</div>

@endsection