<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>


<!-- start persada gallery -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="header-gallery">
                        <h2 class="text-center">PERSADA GALLERY</h2>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2 col-12 d-flex justify-content-center">
                    <div class="row">
                        <?php foreach($gambar as $gall) : ?>
                        <div class="col-md-4 col-6 p-0">
                            <div class="gallery">
                               <div class="gambar">
                               <a data-fslightbox="gallery" href="img/galleries/<?= $gall ?>"><img src="img/galleries/<?= $gall ?>" alt="1"></a>
                               </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end persada gallery -->


<?= $this->endSection('content'); ?>