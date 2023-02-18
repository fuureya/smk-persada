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
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://media.istockphoto.com/id/1407271723/photo/gray-gradient-background.jpg?b=1&s=170667a&w=0&k=20&c=wR_0Nfhe5W2DYm_o94veFQ5PRoD6Y_9DPhuOpcNIgzA=" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://media.istockphoto.com/id/1407271723/photo/gray-gradient-background.jpg?b=1&s=170667a&w=0&k=20&c=wR_0Nfhe5W2DYm_o94veFQ5PRoD6Y_9DPhuOpcNIgzA=" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://media.istockphoto.com/id/1407271723/photo/gray-gradient-background.jpg?b=1&s=170667a&w=0&k=20&c=wR_0Nfhe5W2DYm_o94veFQ5PRoD6Y_9DPhuOpcNIgzA=" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->


<?= $this->endSection(); ?>