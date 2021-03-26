<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/logo.png" type="image/ico" />
    <title>CV. Bianto Factory</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include('includes/header.php'); ?>
    <!-- /Header -->

    <!-- Banner -->
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-teal-900">Elemen Pemanas Spesialis
                    <br class="hidden lg:inline-block">Termokopel
                </h1>
                <p class="mb-8 leading-relaxed">Percayakan kebutuhan Sparepart Elektrikal, Mekanikal, Produk HF lebih khusus di bidang Heating Elements pada kami, karena kami sudah berpengalaman di bidang tersebut. Jaminan Kualitas dan Harga menjadi kepercayaan kami.</p>
                <!--<div class="flex justify-center">
                    <button class="inline-flex text-white bg-teal-600 border-0 py-2 px-6 focus:outline-none hover:bg-teal-800 rounded text-lg">Ketahui Selengkapnya -></button>
                </div>-->
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="assets/images/bianto.png">
            </div>
        </div>
    </section>
    <!-- /Banner -->

    <!-- Client -->
    <section class="text-gray-600 body-font">
        <div class="container px-4,9 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">PELANGGAN KAMI</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Kami telah banyak mengerjakan alat pemanas untuk berbagai perusahaan ternama, dan mereka puas dengan hasil yang kami berikan. Berikut adalah brand perusahaan yang telah bekerjasama dengan kami.</p>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="xl:w-1/4 mr-10 ml-10 md:w-1/2 p-3">
                    <img src="assets/images/client1.png" alt="">
                </div>
                <div class="xl:w-1/4 mr-10 ml-10 md:w-1/2 p-3">
                    <img src="assets/images/client2.png" alt="">
                </div>
                <div class="xl:w-1/4 mr-10 ml-10 md:w-1/2 p-3">
                    <img src="assets/images/client3.png" alt="">
                </div>
                <div class="flex flex-wrap justify-center">
                    <div class="xl:w-1/4 mr-10 ml-10 md:w-1/2 p-3">
                        <img src="assets/images/client5.png" alt="">
                    </div>
                    <div class="xl:w-1/4 mr-10 ml-10 md:w-1/2 p-3">
                        <img src="assets/images/client4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Client -->


    <!-- Content -->
    <?php include('content.php'); ?>
    <!-- /Content -->

    <!-- Tim -->
    <?php include('team.php'); ?>
    <!-- /Tim -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer -->
</body>

</html>