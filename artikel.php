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
            <section class="text-gray-600 body-font">
  <div class="container px-5 py-5 mx-auto">
    <div class="flex flex-wrap -m-4">
    <?php
            $sql = mysqli_query($koneksidb, "SELECT * FROM artikel ORDER BY id DESC") or die(mysqli_error($koneksidb));
            
            while ($data = mysqli_fetch_assoc($sql)) {
        ?>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center"src="admin/assets/images/artikel/<?= $data['gambar'] ?>" alt="content">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?= "{$data['tanggal']}" ?></h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?= $data['judul'] ?></h1>
            <p class="leading-relaxed mb-3"><?= $data['deskripsi'] ?></p>
            <div class="flex items-center flex-wrap ">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
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