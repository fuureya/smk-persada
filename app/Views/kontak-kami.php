<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>


<!-- jumbotron -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 p-0">
            <div class="jumbotron jumbotron-fluid p-0 m-0">
                <div class="content d-flex justify-content-center align-items-center mb-5 mb-md-0 p-0">
                    <div class="secs">
                        <h1 class="lead text-center">Hubungi Kami</h1>
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

<!-- hubungi kami section -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="container mt-5">
                <h3 class="text-center">HUBUNGI KAMI</h3>
                <p class="text-center">Hubungi kami atau follow social media kami untuk informasi lebih lanjut terkait <b class="text-success font-weight-bold">SMK PERSADA MAKASSAR</b></p>
            </div>
            <div class="container mt-5">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <p class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-brands fa-instagram"></i> Instagram : 
                                    </p>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item bg-light" href="https://www.instagram.com/persadaschool/">@persadaschool</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <p class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-brands fa-whatsapp"></i> Whatsapp : 
                                    </p>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item bg-light" href="https://wa.me/085343703720" >Admin SMK (Pak Oktavianus)</a>
                                        <a class="dropdown-item bg-light" href="https://wa.me/085343795087" >Admin SMP (Pak Achmat)</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- end hubungi kami -->


<?= $this->endSection(); ?>