<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">PRODUK KAMI</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Kami menghasilkan berbagai macam produk pemanas (heater) untuk kebutuhan pabrik atau industri rumahan, diantaranya adalah, band heater, tubular heater, immersion heater, water heater, dan nozzle heater.</p>
    </div>
    <div class="flex flex-wrap -m-4">
    <?php
				//query ke database SELECT tabel produk urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksidb, "SELECT * FROM produk ORDER BY id DESC") or die(mysqli_error($koneksidb));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if (mysqli_num_rows($sql) > 0) {
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while ($data = mysqli_fetch_assoc($sql)) {
						//menampilkan data perulangan
					?>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4 " src="assets/images/'<?= $data['fotoproduk'] ?>" style="object-fit: contain">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900"><?= $data['judul'] ?></h2>
                  <!-- <h3 class="text-gray-500 mb-3">Pemanas Plastik</h3> -->
                  <p class="mb-4"><?= $data['deskripsi'] ?></p>
                    <a class="text-gray-500">
                    <button class="inline-flex text-teal bg-white-600 border-0 py-1 px- focus:outline-none hover:text-blue-800 rounded text-lg">Selengkapnya -></button>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          <?php
					}
					//jika query menghasilkan nilai 0
				} else {
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
      
    </div>
  </div>
  <!-- Ini apa -->
  <section class="text-gray-600 body-font">
    <div class="flex flex-col text-center w-full mb-20">
          <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">PELAYANAN KAMI</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Kami mengutamakan pelayanan dengan setulus hati, melayani dari awal proses pengerjaan hingga proses pengerjaan selesai dengan baik dan hasil yang sesuai kebutuhan para pelanggan.</p>
    </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Kualitas Terbaik</h2>
                    <p class="leading-relaxed text-base">Kualitas adalah hal yang sangat penting menurut kami agar konsumen kami merasa puas dengan hasil yang kami berikan dengan kualitas No.1.</p>
                    <!-- <a class="mt-3 text-green-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Pelayanan Cepat</h2>
                    <p class="leading-relaxed text-base">Proses pengerjaan dan pelayanan yang kami tawarkan adalah, bekerja dengan cepat namun akurat, sesuai dengan keinginan konsumen.</p>
                    <!-- <a class="mt-3 text-green-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                </div>
                <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
            </div>
            <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
                <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Harga Terjangkau</h2>
                    <p class="leading-relaxed text-base">Dengan kualitas yang kami hasilkan, kami dapat memberikan harga yang lebih terjangkau, namun tetap berkualitas.</p>
                    <!-- <a class="mt-3 text-teal-600 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Ini apa -->
</section>
