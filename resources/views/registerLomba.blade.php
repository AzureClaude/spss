@extends('layout/main')

@section('title','Registrasi Peserta')

@section('site-content')
<div class="container">
    <div class="fit-banner text-center">
    <img src="<?php echo asset('storage/assets/images/spss-banner.PNG')?>">
    </div>

    <div class="form-style" style="margin: 24px auto">
    <div class="form-style-heading" style="border-bottom: 2px solid #019b4e; text-align: center; padding-bottom: 4px;">
        <span class="heading text-white" style="font-size: calc(8px + 2vw);">Registrasi Peserta</span>
    </div>
    <div class="form-style-content">
        <form action="#" id="competitionForm" method="GET">
        <div class="form-group">
            <span class="text-white" style="font-weight: 600;">Peserta 1</span>
        </div>
            <div class="form-group">
            <input type="text" class="form-control" id="NamaPesertaA" placeholder="Nama">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="JurusanPesertaA" placeholder="Jurusan">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="PhonePesertaA" placeholder="No. HP">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="LinePesertaA" placeholder="ID Line">
            </div>
            <div class="form-group">
            <article class="text-white">Unggah Kartu Tanda Mahasiswa (KTM)</article>
            <label for="KTMPesertaA" class="btn btn-outline-success fit-content-btn" style="margin: 4px 0 0;">Pilih file</label>
            <span id="FilePesertaA" class="text-white"></span>
            <input type="file" class="form-control" id="KTMPesertaA" style="display: none;">
            </div>
            <div class="form-group" style="margin-top: 24px;">
            <span class="text-white" style="font-weight: 600;">Peserta 2</span>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="NamaPesertaB" placeholder="Nama">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="JurusanPesertaB" placeholder="Jurusan">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="PhonePesertaB" placeholder="No. HP">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="LinePesertaB" placeholder="ID Line">
            </div>
            <div class="form-group">
            <article class="text-white">Unggah Kartu Tanda Mahasiswa (KTM)</article>
            <label for="KTMPesertaB" class="btn btn-outline-success fit-content-btn" style="margin: 4px 0 0;">Pilih file</label>
            <span id="FilePesertaB" class="text-white"></span>
            <input type="file" class="form-control" id="KTMPesertaB" style="display: none;">
            </div>
            <div class="text-right" style="margin-top: 24px;">
                <button class="btn btn-outline-success fit-content-btn" style="margin: 0;" type="submit">Daftar</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection

@section('partial-script')
<script>
    $(document).on('change', '#KTMPesertaA', function (event) {
        $('#FilePesertaA').html(event.target.files[0].name);
    });

    $(document).on('change', '#KTMPesertaB', function (event) {
        $('#FilePesertaB').html(event.target.files[0].name);
    });
</script>
@endsection