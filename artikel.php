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
    <title>Artikel - CV. Bianto Factory</title>
    <link rel="icon" href="assets/images/logo.png" type="image/ico" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        function AddReadMore() {
            //This limit you can set after how much characters you want to show Read More.
            var carLmt = 280;
            // Text to show when text is collapsed
            var readMoreTxt = " ... Baca Selengkapnya";
            // Text to show when text is expanded
            var readLessTxt = " Baca Lebih Singkat";


            //Traverse all selectors with this class and manupulate HTML part to show Read More
            $(".addReadMore").each(function() {
                if ($(this).find(".firstSec").length)
                    return;

                var allstr = $(this).text();
                if (allstr.length > carLmt) {
                    var firstSet = allstr.substring(0, carLmt);
                    var secdHalf = allstr.substring(carLmt, allstr.length);
                    var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                    $(this).html(strtoadd);
                }

            });
            //Read More and Read Less Click Event binding
            $(document).on("click", ".readMore,.readLess", function() {
                $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
            });
        }
        $(function() {
            //Calling function after Page Load
            AddReadMore();
        });
    </script>

    <style>
        .addReadMore.showlesscontent .SecSec,
        .addReadMore.showlesscontent .readLess {
            display: none;
        }

        .addReadMore.showmorecontent .readMore {
            display: none;
        }

        .addReadMore .readMore,
        .addReadMore .readLess {
            font-family: century gothic;
            font-weight: bold;
            margin-left: 2px;
            color: teal;
            cursor: pointer;
        }

        .addReadMoreWrapTxt.showmorecontent .SecSec,
        .addReadMoreWrapTxt.showmorecontent .readLess {
            display: block;
        }
    </style>


</head>

<body>

    <?php include('includes/header.php'); ?>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="container px-5 py-1 mx-auto">
                    <div class="flex flex-col text-center w-full mb-5">
                        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">ARTIKEL</h1>
                    </div>
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="-my-8 divide-y-2 divide-gray-100">
                                <?php
                                $sql = mysqli_query($koneksidb, "SELECT * FROM artikel ORDER BY id DESC") or die(mysqli_error($koneksidb));

                                while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <div class="py-8 flex inline-flex-wrap md:flex-nowrap">
                                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                            <img class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="admin/assets/images/artikel/<?= $data['gambar'] ?>" alt="content">
                                            <span class="mt-1 text-gray-500 text-sm "><?= "{$data['tanggal']}" ?></span>
                                        </div>
                                        <div class="md:flex-grow">
                                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?= $data['judul'] ?></h2>
                                            <p class="addReadMore showlesscontent"> <?= $data['deskripsi'] ?> </p>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</body>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
<!-- /Footer -->

</html>