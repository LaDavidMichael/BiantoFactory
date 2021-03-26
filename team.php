<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">

      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">TIM KAMI</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Tenaga Ahli yang kami miliki adalah orang-orang yang berpengalaman di bidangnya, yang telah banyak menghasilkan produk-produk sesuai pesanan, ataupun memeperbaiki produk pelanggan dengan hasil yang baik.</p>

    </div>
    <div class="flex flex-wrap -m-4">
      <?php
      //$pagetype = $_GET['type'];
      $sql = "SELECT * from team";
      $query1 = mysqli_query($koneksidb, $sql);
      if (mysqli_num_rows($query1) > 0) {
        while ($result = mysqli_fetch_array($query1)) {
      ?>
          <div class="p-4 lg:w-1/2">
            <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="admin/assets/images/<?php echo htmlentities($result['foto']); ?>" alt="team">
              <div class="flex-grow sm:pl-8">
                <h2 class="title-font font-medium text-lg text-gray-900"><?php echo htmlentities($result['nama']); ?></h2>
                <h3 class="text-gray-500 mb-3"><?php echo htmlentities($result['jabatan']); ?></h3>
                <p class="mb-4"><?php echo htmlentities($result['deskripsi']); ?></p>
                <span class="inline-flex">

                </span>
              </div>
            </div>
          </div>
      <?php }
      }
      ?>
    </div>
  </div>
</section>