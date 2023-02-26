<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h3 class="text-center">Form Pendaftaran SMP PERSADA</h3>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form class="mt-5" method="post" id="pendaftaran">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama">Masukkan Nama Siswa</label>
                    <input type="text" class="form-control" autocomplete="off" id="nama" name="nama" placeholder="Masukkan Nama Siswa">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat lahir</label>
                    <input type="text" class="form-control" autocomplete="off" id="ttl" name="tempat" placeholder="Masukkan Tempat Tangal Lahir">
                </div>
                <div class="form-group">
                    <label for="ttl">Tanggal Lahir</label>
                    <input type="date" class="form-control" autocomplete="off" id="ttl" name="ttl" placeholder="Masukkan Tempat Tangal Lahir">
                </div>
                <div class="form-group">
                    <label for="no-wa">No Whatsapp Siswa</label>
                    <input type="number" class="form-control" autocomplete="off" id="no-wa" name="no-wa" placeholder="Masukkan No Whatsapp" >
                </div>
                <div class="form-group">
                    <label for="ortu">Masukkan Nama Orang Tua/Wali</label>
                    <input type="text" class="form-control" autocomplete="off" id="ortu" name="ortu" placeholder="Masukkan Nama Orang Tua Wali">
                </div>
                <div class="form-group">
                    <label for="wa-wali">No Whatsapp Orangtua/Wali</label>
                    <input type="number" class="form-control" autocomplete="off" id="wa-wali" name="wa-wali" placeholder="Masukkan No Whatsapp Orangtua/Wali">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="siap" name="siap" value="Saya Siap">
                    <label class="form-check-label" for="siap">Saya Siap mengikuti</label>
                </div>
                <button type="submit" class="btn btn-success">Daftar</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>