<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">

        <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Visi & Misi</h1>
            <!-- <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p> -->
        </div>
        
        <!-- Visi -->
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <h1>Visi</h1>
                    </div>
                    <?php
                    //$pagetype = $_GET['type'];
                    $sql = "SELECT * from visi";
                    $query1 = mysqli_query($koneksidb, $sql);
                    if (mysqli_num_rows($query1) > 0) {
                        while ($result = mysqli_fetch_array($query1)) {
                    ?>
                            <div class="flex-grow">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium"><?php echo htmlentities($result['visi']); ?></span>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </div>
            <!-- /Visi -->


            <!-- Misi -->
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <h1>Misi</h1>
                    </div>
                    <?php
                    //$pagetype = $_GET['type'];
                    $sql = "SELECT * from misi";
                    $query1 = mysqli_query($koneksidb, $sql);
                    if (mysqli_num_rows($query1) > 0) {
                        while ($result = mysqli_fetch_array($query1)) {
                    ?>
                            <div class="flex-grow">
                                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium"><?php echo htmlentities($result['misi']); ?></span>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </div>
            <!-- /Misi -->

        </div>
    </div>
</section>