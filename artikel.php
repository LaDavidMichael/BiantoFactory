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
                <?php
                //$pagetype = $_GET['type'];
                $sql = "SELECT * from artikel";
                $query1 = mysqli_query($koneksidb, $sql);
                if (mysqli_num_rows($query1) > 0) {
                    while ($result = mysqli_fetch_array($query1)) {
                ?>
                        <div class="py-8 flex flex-wrap md:flex-nowrap">

                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">

                                <span class="font-semibold title-font text-gray-700"><?php echo htmlentities($result['judul']); ?></span>
                                <span class="mt-1 text-gray-500 text-sm"><?php echo htmlentities($result['tanggal']); ?></span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed"><?php echo htmlentities($result['deskripsi']); ?></p>
                                <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>


                        </div>
                <?php }
                }
                ?>

            </div>
        </div>
    </section>

</body>

</html>