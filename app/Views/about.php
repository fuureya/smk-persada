<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>


<!-- jumbotron -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid p-0 m-0">
                <div class="content d-flex justify-content-center align-items-center mb-5 mb-md-0 p-0">
                    <div class="secs">
                        <h1 class="lead text-center">Tentang Kami</h1>
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

<!-- content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="persada-first">
                <h3 class="text-center">SMK PERSADA</h3>
                <div class="container">
                    <p class="text-center"><b class="text-success font-weight-bold">SMK PERSADA MAKASSAR</b> adalah sekolah menengah kejuruan yang memiliki dua jurusan yaitu jurusan Teknik Komputer Jaringan (TKJ) & Teknik Kendaraan Ringan (TKR)</p>
                </div>
            </div>
        </div>
        <!-- program keahlian -->
        <div class="col-12 col-md-12 mt-5">
            <div class="program-keahlian">
                <h3 class="text-center">PROGRAM KEAHLIAN</h3>
                <p class="text-center">Pilihan program keahlian di <b class="text-success font-weight-bold">SMK Persada Makassar</b></p>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-2 col-6 offset-md-4 text-center">
                            <i class="fa-solid fa-computer fa-6x text-success"></i>
                            <h5 class="text-center font-weight-bold mt-2">Teknik Komputer Jaringan</h5>
                        </div>
                        <div class="col-md-2 col-6 text-center">
                            <i class="fa-solid fa-gears fa-6x text-success"></i>
                            <h5 class="text-center font-weight-bold mt-2">Teknik Kendaraan Ringan</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 mt-5">
            <div class="visi">
                <h3 class="text-center"><b class="text-success">VISI</b> SMK PERSADA MAKASSAR</h3>
                <p class="text-center">Menyiapkan tenaga Ahli Terampil Mandiri mengikuti perkembangan teknologi</p>
            </div>
        </div>

        <div class="col-12 col-md-12 mt-5">
            <div class="misi">
                <h3 class="text-center"><b class="text-success">MISI</b> SMK PERSADA MAKASSAR</h3>
                <p class="text-center">Menciptakan lapangan kerja baru</p>
                <p class="text-center">Meningkatkan keterampilan dan keahlian siswa</p>
                <p class="text-center">Meningkatkan kualitas siswa</p>
                <p class="text-center">Meningkatkan sumber daya manusia</p>
            </div>
        </div>

        <div class="col-12 col-md-12 mt-5">
            <div class="guru">
                <h3 class="text-center">GURU</h3>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/01-awal.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">A. Awaluddin, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/02-mappa.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Mappa, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/03-mul.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Muliyadi, S.T</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/04-syatir.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Drs. Syatir</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/05-husnah.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Husnah, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/06-hera.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Haerati, S.Pd.I</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/07-ilma.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Nur Ilma Laely, A.Md Kom</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/08-fadlu.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Muhammad Fadli</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/08-ilham.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Ilham Hatta, S.Pd., M.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/09-indira.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Indira Thamrin, S.Pd.I</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/10-yusti.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Yustianingsih, S.Pd.I</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/11-tuti.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Artuty Wahid, S.Pd., M.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/12-nasri.png" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Nasri, SE</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/05-husnah.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Fatmawati Syarif, S.Pd.I</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/12-nasri.png" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Drs. Sultan</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/14-robi.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Robiyanto, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/15-khalik.png" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Abdul Khalik Arifin, S.Kom</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/16-irfan.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Irfan, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/17-yusfa.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Fertina Yusfaarra'd Permadani, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/05-husnah.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Asnida Aras, S.Pd</h3>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="foto-guru text-center">
                                <img src="img/guru/18-dian.jpg" alt="foto-guru" class="img-fluid">
                            </div>
                            <div class="nama-guru mt-2">
                                <h3 class="text-center mt-2">Dian Purwanti, S.Pd</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end content -->


<?= $this->endSection(); ?>