@extends('layout/main')

@section('title','Change Password')

@section('site-content')
<div class="container">
    <div class="fit-banner text-center">
    <img src="<?php echo asset('storage/assets/images/spss-banner.PNG')?>">
    </div>

    <div class="form-style" style="margin: 24px auto">
    <div class="form-style-heading">
        <span class="heading text-white" style="font-size: calc(10px + 3vw);">Ubah Kata Sandi</span>
    </div>
    <div class="form-style-content">
        <form action="#" id="changePasswordForm" method="GET">
            <div class="form-group">
            <input type="password" class="form-control" id="InputOldPassword" placeholder="Masukkan kata sandi lama">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" id="InputNewPassword" placeholder="Masukkan kata sandi baru">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Ulangi kata sandi baru">
            </div>
            <div class="text-right" style="margin-top: 24px;">
                <button class="btn btn-outline-success fit-content-btn" style="margin: 0;" type="submit">Ubah</button>
            </div>
        </form>
    </div>
    </div>
</div>

@endsection