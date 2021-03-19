<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<?php
//$pagetype = $_GET['type'];
$sql = "SELECT * from profile";
$query1 = mysqli_query($koneksidb, $sql);
if (mysqli_num_rows($query1) > 0) {
    while ($result = mysqli_fetch_array($query1)) {
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tentang Kami CV.Bianto Factory</title>
            <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        </head>

        <body>

            <!-- Header -->
            <?php include('includes/header.php'); ?>
            <!-- /Header -->

            <!-- Profile -->
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto flex flex-col">
                    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
                    <script>
                        var cont = 0;

                        function loopSlider() {
                            var xx = setInterval(function() {
                                switch (cont) {
                                    case 0: {
                                        $("#slider-1").fadeOut(400);
                                        $("#slider-2").delay(400).fadeIn(400);
                                        $("#sButton1").removeClass("bg-teal-800");
                                        $("#sButton2").addClass("bg-teal-800");
                                        cont = 1;

                                        break;
                                    }
                                    case 1: {

                                        $("#slider-2").fadeOut(400);
                                        $("#slider-1").delay(400).fadeIn(400);
                                        $("#sButton2").removeClass("bg-teal-800");
                                        $("#sButton1").addClass("bg-teal-800");

                                        cont = 0;

                                        break;
                                    }

                                }
                            }, 8000);

                        }

                        function reinitLoop(time) {
                            clearInterval(xx);
                            setTimeout(loopSlider(), time);
                        }



                        function sliderButton1() {

                            $("#slider-2").fadeOut(400);
                            $("#slider-1").delay(400).fadeIn(400);
                            $("#sButton2").removeClass("bg-teal-800");
                            $("#sButton1").addClass("bg-teal-800");
                            reinitLoop(4000);
                            cont = 0

                        }

                        function sliderButton2() {
                            $("#slider-1").fadeOut(400);
                            $("#slider-2").delay(400).fadeIn(400);
                            $("#sButton1").removeClass("bg-teal-800");
                            $("#sButton2").addClass("bg-teal-800");
                            reinitLoop(4000);
                            cont = 1

                        }

                        $(window).ready(function() {
                            $("#slider-2").hide();
                            $("#sButton1").addClass("bg-teal-800");


                            loopSlider();


                        });
                    </script>

                    <div class="sliderAx h-auto -mt-10">
                        <div id="slider-1" class="container mx-auto">
                            <div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill" style="background-image: url(assets/images/banner1.jpg)">
                                <div class="md:w-1/2">
                                    <p class="font-bold text-sm uppercase">Tentang Kami</p>
                                    <p class="text-3xl font-bold">CV. Bianto Factory</p>
                                    <p class="text-2xl mb-10 leading-none">Selamat Datang !</p>
                                </div>
                            </div> <!-- container -->
                            <br>
                        </div>

                        <div id="slider-2" class="container mx-auto">
                            <div class="bg-cover bg-bottom h-auto text-white py-24 px-10 object-fill" style="background-image: url(assets/images/banner2.jpg)">

                                <p class="font-bold text-sm uppercase">Tentang Kami</p>
                                <p class="text-3xl font-bold">CV. Bianto Factory</p>
                                <p class="text-2xl mb-10 leading-none">Selamat Datang !</p>
                                <!--<a href="#" class="bg-teal-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>-->
                            </div> <!-- container -->
                            <br>
                        </div>

                    </div>

                    <div class="flex justify-between w-12 mx-auto pb-2">
                        <button id="sButton1" onclick="sliderButton1()" class="bg-teal-600 rounded-full w-4 pb-2 "></button>
                        <button id="sButton2" onclick="sliderButton2() " class="bg-teal-600 rounded-full w-4 p-2"></button>
                    </div>

                    <div class="lg:w-4/6 mx-auto">

                        <div class="flex flex-col sm:flex-row mt-10">
                            <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                                <a class="navbar-brand js-scroll-trigger" href="index.php">
                                    <img src="assets/images/<?php echo htmlentities($result['gambar']); ?>" alt="" />
                                </a>
                                <div class="flex flex-col items-center text-center justify-center">
                                    <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Robianto</h2>
                                    <h2 class="font-small title-font mt-1 text-gray-900 text-lg">Chief Executive Owner (CEO)</h2>
                                    <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                                    <p class="text-base">"Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland."</p>
                                </div>
                            </div>

                            <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                                <p class="leading-relaxed text-lg md:w-2/2 mb-4"><?php echo htmlentities($result['deskripsi']); ?></p>
                                <a class="text-indigo-500 inline-flex items-center">Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <center>
                    <iframe width="600" height="400" src="https://www.youtube.com/embed/I9dt0wuHSA4">
                    </iframe>
                </center>




            </section>
            <!-- /Profile -->

    <?php }
}
    ?>


        </body>

        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
        <!-- /Footer -->

        </html>