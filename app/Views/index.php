<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<!-- jumbotron -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid p-0 m-0">
                <div class="content d-flex justify-content-center align-items-center mb-5 mb-md-0 p-0">
                    <div class="secs">
                        <h1 class="lead text-center">Selamat Datang</h1>
                        <p class="text-center">SMK PERSADA</p>
                        <h3 class="text-center">Build Your Skill Build Your Career</h3>
                    </div>
                </div>
                <!-- carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/jumbotron1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/jumbotron2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/jumbotron3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/jumbotron4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/jumbotron5.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end jumbotron -->

<!-- button section -->
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-12 col-md-12">
            <!-- belang-belang section -->
            <div class="row p-0">
                <div class="col-12 col-md-8 offset-md-2 bg-light">
                    <div class="row p-0">
                        <div class="col-4 col-md-4 text-center p-0">
                            <i class="fa-sharp fa-solid fa-house fa-3x text-success py-3"></i>
                            <h5 class="text-center font-weight-bold text">MY PERSADA</h4>
                                <P class="lead">Direktori sistem informasi</P>
                        </div>
                        <div class="col-4 col-md-4 bg-success text-center p-0">
                            <i class="fa-sharp fa-solid fa-chalkboard-user fa-3x text-light py-3"></i>
                            <h5 class="text-center font-weight-bold text-light">GURU</h4>
                                <P class="lead text-light">Profil Pengajar Dan Staf</P>
                        </div>
                        <div class="col-4 col-md-4 text-center p-0">
                            <i class="fa-solid fa-book fa-3x text-success py-3"></i>
                            <h5 class="text-center font-weight-bold">MODUL</h4>
                                <P class="lead">Pembelajaran DLL</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end button section -->

<!-- kenapa harus persada? -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <div class="kenapa">
                        <h3 class="text-center">KENAPA HARUS <b class="text-success">SMK PERSADA MAKASSAR</b></h3>
                    </div>
                    <div class="kenapa-slider mt-5">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="kenapa-icon text-center">
                                    <i class="fa-solid fa-person-chalkboard text-success fa-3x"></i>
                                </div>
                                <div class="kenapa-desc">
                                    <h3 class="text-center mt-2">Pengajar Kompoten</h3>
                                    <p class="text-center">Guru yang Up To Date dengan perkembangan industri</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="kenapa-icon text-center">
                                    <i class="fa-solid fa-handshake text-center text-success fa-3x"></i>
                                </div>
                                <div class="kenapa-desc">
                                    <h3 class="text-center mt-2">Kerja Sama Yang Luas</h3>
                                    <p class="text-center">Memperbesar kesempatan kerja setelah lulus</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="kenapa-icon text-center">
                                    <i class="fa-solid fa-school text-center text-success fa-3x"></i>
                                </div>
                                <div class="kenapa-desc">
                                    <h3 class="text-center mt-2">Lingkungan Nyaman</h3>
                                    <p class="text-center">Berada di lingkungan yang astri, aman dan kondusif</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="kenapa-icon text-center">
                                    <i class="fa-solid fa-laptop text-center text-success fa-3x"></i>
                                </div>
                                <div class="kenapa-desc">
                                    <h3 class="text-center mt-2">Fasilitas Lengkap</h3>
                                    <p class="text-center">Penunjang belajar dengan fasilitas premium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end kenapa harus persada ? -->

<!-- sambutan kepsek -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center bg-success order-2 order-md-1 sambutan">
                    <div class="p-0 p-md-0">
                        <h2 class="font-weight-bold text-light text-center text-md-left mt-3">SAMBUTAN</h2>
                        <h4 class="text-light text-center text-md-left">KEPALA SEKOLAH SMK PERSADA MAKASSAR</h4>
                        <p class="text-light text-center text-md-left">Selamat datang di SMK PERSADA MAKASSAR. Sekolah menengah kejuruan yang memiliki visi “Menyiapkan tenaga Ahli Terampil Mandiri mengikuti perkembangan teknologi”. </p>
                        <p class="text-light text-center text-md-left">Kami berkomitmen menyelenggarakan pendidikan yang berkualitas guna menghasilkan generasi yang unggul dan berdaya saing global</p>
                        <h4 class="text-center text-light font-weight-bold mb-3">Ir. H. Zainuddin B Ilyas</h4>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-end order-1 order-md-2">
                    <div class="p-0 p-md-0">
                        <img src="img/kepsek.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sambutan kepsek -->

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
                        <?php foreach ($gambar as $gall) : ?>
                            <div class="col-md-4 col-6 p-0">
                                <div class="gallery">
                                    <div class="gambar">
                                        <a data-fslightbox="gallery" href="img/gallery/<?= $gall ?>"><img src="img/gallery/<?= $gall ?>" alt="1"></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <div class="col-12 col-md-12 mt-5">
                            <div class="text-center">
                                <a href="/gallery" class="btn btn-success">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end persada gallery -->

<!-- start persada sertifikasi -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="header-gallery">
                        <h2 class="text-center">SERTIFIKASI INTERNASIONAL</h2>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2 col-12 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://mikrotik.com"><img src="img/mikrotik.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&hd=persadaict.sch.id&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession"><img src="img/google.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&redirect_uri=https%3A%2F%2Fwww.office.com%2Flandingv2&response_type=code%20id_token&scope=openid%20profile%20https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&response_mode=form_post&nonce=637704099578159835.N2M5ZTZjYWItNDI2ZS00OWY4LWJhZTgtOTc4YjI3ZTllMTNiNDc0M2M2ZTgtZTg5Yi00ODBiLTg1Y2QtMTM4YWQwMzE1N2Mw&ui_locales=en-US&mkt=en-US&state=kNIzeTDwOhyKStKG29qdjMLKSwz81v-4m_AqoGvwdzkTsnxR2rbsskTvRah4nXRzk5WhKgPW-ZsRT6GheFhS1yeYqmB-XmGCLdngsKDvImJYvMhns9p0mStX6kZHsonRNRDWFKJ-HdokHCusL9-0CqzPIYG8tPefc1z3TEP1O0qrSkwPyHKJCsIrR229GQ_JcZ9pOWVQYicnmF9BNN464segbGr-nbpg8nAdfYEcbYqbOThQbc3h7h4t_SU6-czcdkoA19UIlOFNkc43tMp0nxobV1eL4C55jt8QGggPGck&x-client-SKU=ID_NETSTANDARD2_0&x-client-ver=6.11.0.0"><img src="img/microsoft.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/fortinet.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/paloalto.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/oracle academy.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/vmware.jpg" alt="1"></a>

                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/ndg.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/bootstrap.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/autodesk.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/lucidchart.jpg" alt="1"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 p-0">
                            <div class="sertivikasi">
                                <a href="https://training.fortinet.com/"><img src="img/jetbrain.jpg" alt="1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end persada sertifikasi -->

<?= $this->endSection('content'); ?>