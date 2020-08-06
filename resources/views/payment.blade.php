@extends('layout/main')

@section('title','Confirm Payment')

@section('site-content')
<div class="container">
    <div class="fit-banner text-center">
        <img src="<?php echo asset('storage/assets/images/spss-banner.PNG')?>">
    </div>

    <div class="form-style" style="margin: 24px auto">
    <div class="form-style-heading" style="text-align: left;">
        <article class="text-white">Bank Central Asia (BCA)</article>
        <article class="text-white">an. Elbert Adiwijanto</article>
        <article class="text-white">No Rek. 8870550678</article>
        <article class="text-white">Total pembayaran : Rp xxxxxx</article>
    </div>
    <div class="form-style-content">
        <form action="#" id="paymentForm" method="GET">
        <div class="form-group">
            <span class="text-white" style="font-weight: 700;">Konfirmasi Pembayaran</span>
        </div>
            <div class="form-group">
            <input type="text" class="form-control" id="NamaPengirim" placeholder="Nama Pengirim">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="NamaBank" placeholder="Nama Bank">
            </div>
            <div class="form-group">
            <article class="text-white">Unggah Bukti Transfer</article>
            <label for="BuktiPayment" class="btn btn-outline-success fit-content-btn" style="margin: 4px 0 0;">Pilih file</label>
            <span id="FileBuktiPayment" class="text-white"></span>
            <input type="file" class="form-control" id="BuktiPayment" style="display: none;">
            </div>
            <div class="text-right" style="margin-top: 24px;">
                <button class="btn btn-outline-success fit-content-btn" style="margin: 0;">Kirim</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection

@section('partial-script')
<script>
    $(document).on('change', '#BuktiPayment', function (event) {
        $('#FileBuktiPayment').html(event.target.files[0].name);
    });
</script>
@endsection