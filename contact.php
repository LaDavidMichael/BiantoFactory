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
  <title>Kontak Kami - CV.Bianto Factory</title>

  <link rel="icon" href="assets/images/logo.png" type="image/ico" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

  <!-- Header -->
  <?php include('includes/header.php'); ?>
  <!-- /Header -->

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

            <div class="lg:w 3/6 md:w-2/4 bg-gray-300 rounded-lg overflow-hidden sm:mr-8 p-8 flex items-end justify-start relative">
              <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1512790863917!2d112.76341851477532!3d-7.336902294705242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6537b8ef8d%3A0x918ec9a03167c4e5!2sBIANTO%20FACTORY%20%7C%7C%20Jual%20ELEMEN%20PEMANAS!5e0!3m2!1sid!2sid!4v1616426909214!5m2!1sid!2sid" marginheight="0" marginwidth="0" scrolling="no" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>

              <div class="bg-white relative flex flex-wrap py-2 rounded shadow-md">

                <div class="lg:w-1/2 px-6">
                  <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Alamat</h2>
                  <p class="mt-1"> <?php echo htmlentities($result['alamat']); ?> </p>
                  <br>
                </div>

                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                  <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Email</h2>
                  <a class="text-teal-200 leading-relaxed"> <?php echo htmlentities($result['email']); ?> </a>
                  <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">No.Telpn</h2>
                  <p class="leading-relaxed"> <?php echo htmlentities($result['tlpn']); ?> </p>
                </div>
              </div>
            </div>

            <div class="lg:w-1/3 md:w-2/4 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
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
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              </div>

              <div class="relative mb-4">
                <label for="pesan" class="leading-7 text-sm text-gray-600">Pesan</label>
                <textarea id="pesan" name="pesan" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
              </div>

              <button class="text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded text-lg" action="contact-aksi.php">Kirim</button>
              <!-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> -->
            </div>

        </form>

        </div>

    <?php }
    } ?>


</body>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
<!-- /Footer -->

</html>