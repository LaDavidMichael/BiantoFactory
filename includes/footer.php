<footer class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="assets/images/logobiantoheader.png" alt="" /></a>
            </a>
            <p class="mt-2 text-sm text-black-500">Elemen Pemanas Spesialis <br>& Termokopel</p>

        </div>
        <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">

                <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3 mr-5 navbar-brand js-scroll-trigger hover:text-teal-600" href="artikel.php"> ARTIKEL</a>
                <nav class="list-none mb-10">

                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">ALAMAT</h2>
                <nav class="list-none mb-10">
                    <?php
                    //$pagetype = $_GET['type'];
                    $sql = "SELECT * from contact";
                    $query1 = mysqli_query($koneksidb, $sql);
                    if (mysqli_num_rows($query1) > 0) {
                        while ($result = mysqli_fetch_array($query1)) {
                    ?>

                            <li>
                                <p class="leading-relaxed text-base"> <?php echo htmlentities($result['alamat']); ?></p>
                            </li>
                </nav>

            </div>
        </div>
    </div>

<?php }
                    } ?>

<?php
//$pagetype = $_GET['type'];
$sql = "SELECT * from sosialmedia";
$query1 = mysqli_query($koneksidb, $sql);
if (mysqli_num_rows($query1) > 0) {
    while ($result = mysqli_fetch_array($query1)) {
?>

        <div class="bg-teal-700">
            <div class="container mx-auto py-3 px-8 flex flex-wrap flex-col sm:flex-row">
                <p class="text-white text-sm text-center sm:text-left">© 2021 Bianto Factory</p>

                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="mx-5 text-white hover:text-teal-200" href="<?php echo htmlentities($result['facebook']); ?>" target="_blank">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>

                    <a class="text-white hover:text-teal-200" href="<?php echo htmlentities($result['instagram']); ?>" target="_blank">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>

                    <a class="mx-6 text-white hover:text-teal-200" href="<?php echo htmlentities($result['youtube']); ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path stroke="none" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>

                </span>
            </div>
        </div>
<?php }
} ?>

</footer>