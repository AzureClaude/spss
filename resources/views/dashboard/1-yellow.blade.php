<article class="heading text-white" style="font-size: calc(10px + 1.5em);">
Pengerjaan tahap 1
</article>

<article class="sub-heading text-white" style="font-size: calc(8px + 1em);">Silahkan unduh soal tahap 1 <a href="#" class="link">disini</a>.</article><br />
<article class="sub-heading text-white" style="font-size: calc(8px + 1em);">Batas pengiriman jawaban 00 hari 00 jam 00 menit 00 detik lagi.</article>
<form action="#" id="Tahap1Form">
    <article class="sub-heading text-white" style="font-size: calc(8px + 1em);">Unggah jawaban anda : </article>
    <div class="form-group" style="margin-top: 12px;">
    <label for="JawabanTahap1" class="btn btn-outline-success fit-content-btn" style="margin: 4px 0 0;">Choose file</label>
    <span id="FileJawaban1" class="text-white"></span>
    <input type="file" class="form-control" id="JawabanTahap1" style="display: none;">
    </div>
    <div class="form-group">
    <div class="outer-border w-100 text-white">
        <div class="inner-border">
        <table id="FileDetailsTable">
            <tr>
            <th style="width: 45%;"></th>
            <th style="width: 10%;"></th>
            <th style="width: 100%;"></th>
            </tr>
            <tr>
            <td>Waktu unggahan</td>
            <td>:</td>
            <td>2020-08-26 16:12:42</td>
            </tr>
            <tr>
            <td>Nama File</td>
            <td>:</td>
            <td>test.pdf</td>
            </tr>
            <tr>
            <td>Ukuran File</td>
            <td>:</td>
            <td>1 megabytes</td>
            </tr>
        </table>
        <article class="download-file"><a href="#" class="link">Tekan ini</a> untuk mengunduh jawaban anda.</article>
        </div>
    </div>
    <button type="button" class="btn btn-outline-light fit-content-btn" data-toggle="modal" data-target="#finaliseModal" style="margin: 12px 0 0;">Finalisasi</button>
    </div>
</form>

@section('partial-script')
<script>
    $(document).on('change', '#JawabanTahap1', function (event) {
    $('#FileJawaban1').html(event.target.files[0].name);
    });
</script>
@endsection