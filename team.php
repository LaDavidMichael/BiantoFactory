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
                  <a class="text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-2 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="ml-2 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </div>
      <?php }
      }
      ?>
    </div>
    
<!-- CSS Pagination -->
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">    
   
   <br><br>
   <!-- Pagination Tailwind CSS v2.0+ -->
   <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
     <div class="flex-1 flex justify-between sm:hidden">
       <a href="1" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
         Previous
       </a>
       <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
         Next
       </a>
     </div>
     <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
       <div>
         <p class="text-sm text-gray-700">
           Menampikan
           <span class="font-medium">1</span>
           sampai
           <span class="font-medium">2</span>
           halaman dari
           <span class="font-medium">11</span>
           Hasil
         </p>
       </div>
    <div class="inline-flex">
         <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
           <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-teal-200">
             <span class="sr-only">Previous</span>
             <!-- Heroicon name: solid/chevron-left -->
             <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
             </svg>
           </a>
           <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-teal-200">
             1
           </a>
           <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-teal-200">
             2
           </a>
           <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-teal-200">
             <span class="sr-only">Next</span>
             <!-- Heroicon name: solid/chevron-right -->
             <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
             </svg>
           </a>
         </nav>
       </div>
     </div>
   </div>
   
  </div>
</section>