@extends('layout/participant')

@section('title','Dashboard')

@section('site-content')
<div class="container">
    <div style="margin-top: 48px;">
    <article class="heading text-white">Nama Peserta</article>
    <article class="sub-heading text-white" style="font-weight: 600;">Nama tim</article>
    <div class="text-right">
        <a class="btn btn-outline-light fit-content-btn" href="/login">Keluar</a>
    </div>
    </div>

    <div class="row" style="margin: 36px -6px;">
    <div class="col-3" style="padding-right: 6px; padding-left: 6px;"><img src="<?php echo asset('storage/assets/state/0-yellow.PNG')?>" class="w-100"></div>
    <div class="col-3" style="padding-right: 6px; padding-left: 6px;"><img src="<?php echo asset('storage/assets/state/1-grey.PNG')?>" class="w-100"></div>
    <div class="col-3" style="padding-right: 6px; padding-left: 6px;"><img src="<?php echo asset('storage/assets/state/2-grey.PNG')?>" class="w-100"></div>
    <div class="col-3" style="padding-right: 6px; padding-left: 6px;"><img src="<?php echo asset('storage/assets/state/3-grey.PNG')?>" class="w-100"></div>
    <div class="legends" class="w-100">
        <article class="text-white" style="font-weight: 600;">Keterangan :</article>
        <div class="legends-tooltips">
        <div class="legends-tooltips-color bg-secondary"></div>
        <div class="legends-tooltips-meaning text-white">menunggu</div>
        </div>
        <div class="legends-tooltips">
        <div class="legends-tooltips-color bg-success"></div>
        <div class="legends-tooltips-meaning text-white">berhasil</div>
        </div>
        <div class="legends-tooltips">
        <div class="legends-tooltips-color bg-warning"></div>
        <div class="legends-tooltips-meaning text-white">dalam proses</div>
        </div>
        <div class="legends-tooltips">
        <div class="legends-tooltips-color bg-danger"></div>
        <div class="legends-tooltips-meaning text-white">gagal</div>
        </div>
    </div>
    </div>

    <div class="text-box w-100">
    <?php 
        $number = 0;
        $state = "yellow";
    ?>
    <!-- Format : dashboard.tahap-warna -->
    @include('dashboard.1-yellow')
    </div>
</div>

<div class="modal fade" id="finaliseModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
        <p class="text-center">Apakah anda yakin ingin memfinalisasi jawaban anda ?</p>
        <p class="text-center">Anda tidak dapat mengubah jawaban anda kembali.</p>
        <div class="row justify-content-center">
            <div class="col text-right">
            <button class="btn btn-success">Iya</button>
            </div>
            <div class="col">
            <button class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection