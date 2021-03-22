<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Kontak - CV.Bianto Factory</title>

  <link rel="icon" href="assets/images/logo.png" type="image/ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />

</head>

<body>

  <?php include('includes/header.php'); ?>


  <section class="text-gray-600 body-font relative">

    <?php
    //$pagetype = $_GET['type'];
    $sql = "SELECT * from contact";
    $query1 = mysqli_query($koneksidb, $sql);
    if (mysqli_num_rows($query1) > 0) {
      while ($result = mysqli_fetch_array($query1)) {
    ?>
        <form action="contact-aksi.php" method="post" enctype="multipart/form-data">
          <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">

            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
              <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" src="https://maps.google.com/maps?q=-7.3369023,112.7634185&hl=es&z=14&amp;output=embed" marginheight="0" marginwidth="0" scrolling="no" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
              <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                  <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Alamat</h2>
                  <p class="mt-1"> <?php echo htmlentities($result['alamat']); ?> </p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                  <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Email</h2>
                  <a class="text-teal-200 leading-relaxed"> <?php echo htmlentities($result['email']); ?> </a>
                  <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">No.Telpn</h2>
                  <p class="leading-relaxed"> <?php echo htmlentities($result['tlpn']); ?> </p>
                </div>
              </div>
            </div>



            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
              <h1 class="text-gray-900 text-lg mb-1 font-medium title-font"> Ada Pertanyaan ?</h1>
              <!-- <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p> -->
              <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>

              <div class="relative mb-4">
                <label for="hp" class="leading-7 text-sm text-gray-600">No. Hp</label>
                <input type="text" id="hp" name="hp" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>

              <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>

              <div class="relative mb-4">
                <label for="pesan" class="leading-7 text-sm text-gray-600">Pesan</label>
                <textarea id="pesan" name="pesan" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
              </div>

              <button class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg" action="contact-aksi.php">Kirim</button>
              <!-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> -->
            </div>

        </form>

        </div>

    <?php }
    } ?>
  </section>
  
  <!-- Footer -->
  <?php include('includes/footer.php'); ?>
  <!-- /Footer -->

</body>

</html>