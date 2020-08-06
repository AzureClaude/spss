@extends('layout/main')

@section('title','Login')

@section('site-content')
<div class="container">
    <div class="form-style">
    <div class="form-style-heading">
        <span class="heading text-white">Masuk</span>
    </div>
    <div class="form-style-content">
        <form action="#" id="loginForm" method="GET">
            <div class="form-group">
                <input type="email" class="form-control" id="InputEmail" placeholder="Masukkan alamat surel">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="InputPassword" placeholder="Masukkan kata sandi">
            </div>
            <div class="text-right">
                <a href="/changePassword" class="text-success">Lupa kata sandi</a>
            </div>
            <div style="margin-top: 24px;">
                <button class="btn btn-outline-success fit-content-btn" style="margin: 0;" type="submit">Masuk</button>
                <span class="text-white">Belum memiliki akun ? <a href="/register" class="text-success">Buat Akun</a></span>
            </div>
        </form>
    </div>
    </div>
</div>

@endsection