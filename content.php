<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<br><br>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Review Pelanggan Kami</h1>
                <div class="h-1 w-20 bg-teal-500 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Kami selalu ingin memberikan pelayanan yang memuaskan untuk para pelanggan kami, komitmen kami Menjaga kualitas dan kepercayaan konsumen, agar mampu membuat alat pemanas yang sesuai dengan yang dibutuhkan oleh konsumen.</p>
        </div>
        <div class="flex flex-wrap -m-4">

        <?php
            $sql = mysqli_query($koneksidb, "SELECT * FROM testi ORDER BY id DESC") or die(mysqli_error($koneksidb));
            
            while ($data = mysqli_fetch_assoc($sql)) {
        ?>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="admin/assets/images/<?= $data['fotosampul'] ?>" alt="content">
                    <h3 class="tracking-widest text-teal-500 text-xs font-medium title-font"><?= "{$data['kota']}, {$data['provinsi']}" ?></h3>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4"><?= $data['judul'] ?></h2>
                    <p class="leading-relaxed text-base">"<?= $data['deskripsi'] ?>"</p>
                </div>
            </div>
        <?php
            }
        ?>

        </div>
    </div>
</section>
