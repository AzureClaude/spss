@extends('layout/main')

@section('title','Verify Email')

@section('site-content')
<div class="container">
    <div class="fit-banner text-center" style="width: 60%;">
    <img src="<?php echo asset('storage/assets/images/spss-banner.PNG')?>">
    </div>

    <div class="outer-border">
    <div class="inner-border text-center">
        <article class="text-white font-weight-bold">Halo !</article>
        <p class="notify text-white">Untuk mendaftarkan diri pada lomba SPSS 2020, harap melakukan verifikasi e-mail terlebih dahulu dengan cara mengecek e-mail anda.</p>
        <br/><br/>
        <article class="text-white">Jika ada pertanyaan, dapat menghubungi narahubung : 08xxxxxx (nama)</article>
    </div>
    </div>
</div>
@endsection