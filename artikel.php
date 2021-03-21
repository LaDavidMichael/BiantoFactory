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
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
            <div class="container px-5 py-1 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">ARTIKEL</h1>
            </div>
            <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-5 mx-auto">
                <div class="-my-8 divide-y-2 divide-gray-100">
                <?php
                $sql = mysqli_query($koneksidb, "SELECT * FROM artikel ORDER BY id DESC") or die(mysqli_error($koneksidb));
                
                while ($data = mysqli_fetch_assoc($sql)) {
                ?>
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                        <img class="lg:h-40 md:h-15 w-full object-cover object-center"src="admin/assets/images/artikel/<?= $data['gambar'] ?>" alt="content">
                        <span class="mt-1 text-gray-500 text-sm "><?= "{$data['tanggal']}" ?></span>
                            </div>
                            <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?= $data['judul'] ?></h2>
                            <p class="lg:w-1/2 md:w-1/2 w-full leading-relaxed mt-5 "><?= $data['deskripsi'] ?></p>
                                <a href="https://www.youtube.com/channel/UCjyQars8F1AA-1LV8w8O2kw" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                ?>
                </div>
            </div>
     </section>
            

</body>

</html>