@extends('layout/main')

@section('title','Register')

@section('site-content')
<div class="container">
    <div class="fit-banner text-center">
    <img src="<?php echo asset('storage/assets/images/spss-banner.PNG')?>">
    </div>

    <div class="form-style" style="margin: 24px auto">
    <div class="form-style-heading">
        <span class="heading text-white">Daftar</span>
    </div>
    <div class="form-style-content">
        <form action="#" id="registerForm" method="GET">
            <div class="form-group">
            <input type="text" class="form-control" id="InputName" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="InputEmail" placeholder="Alamat Surel">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="InputUniv" placeholder="Asal Universitas">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="InputPhone" placeholder="No. HP">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="InputPassword" placeholder="Masukkan kata sandi">
            </div>
            <div>
            <span class="text-white">Sudah punya akun ? <a href="/login" class="text-success">Masuk</a></span>
            </div>
            <div class="text-right" style="margin-top: 24px;">
                <button class="btn btn-outline-success fit-content-btn" style="margin: 0;" type="submit">Daftar</button>
            </div>
        </form>
    </div>
    </div>
</div>

@endsection