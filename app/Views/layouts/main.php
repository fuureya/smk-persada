<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- google font montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Barlow+Condensed:wght@300&family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- google font poppints -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('style/css/style.css') ?>">
    <!-- login style  -->
    <link rel="icon" href="<?= base_url('img/logo01.png') ?>">
    <title><?= $title ?></title>
    <style>
    </style>
</head>

<body>
    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layouts/footer'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="<?= base_url('lib/lightbox/fslightbox.js') ?>"></script>
    <script src="<?= base_url('style/js/main.js') ?>"></script>
</body>



</html>