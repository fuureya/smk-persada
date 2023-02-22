<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h3 class="text-center">Form Pendaftaran SMK PERSADA</h3>
            <form class="mt-5">
                <div class="form-group">
                    <label for="nama">Masukkan Nama Siswa</label>
                    <input type="text" class="form-control" autocomplete="off" id="nama">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="date" class="form-control" autocomplete="off" id="ttl">
                </div>
                <div class="form-group">
                    <label for="no-wa">No Whatsapp Siswa</label>
                    <input type="number" class="form-control" autocomplete="off" id="no-wa">
                </div>
                <div class="form-group">
                    <label for="ortu">Masukkan Nama Orang Tua/Wali</label>
                    <input type="text" class="form-control" autocomplete="off" id="ortu">
                </div>
                <div class="form-group">
                    <label for="wa-wali">No Whatsapp Orangtua/Wali</label>
                    <input type="number" class="form-control" autocomplete="off" id="wa-wali">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="siap">
                    <label class="form-check-label" for="siap">Saya Siap mengikuti</label>
                </div>
                <button type="submit" class="btn btn-success">Daftar</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>