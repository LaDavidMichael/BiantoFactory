<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN - cv. BIANTO FACTORY</title>

    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }

        const time = new Date();
        let jamUcapan = parseInt(time.getHours());
        if (jamUcapan >= 1 && jamUcapan <= 10) {
            ucapan = '<h3 class="display-2" style="color: white; font-style: italic; font-weight: bold;">Good Morning .....</h3>';
        } else if (jamUcapan >= 10 && jamUcapan <= 18) {
            ucapan = '<h3 class="display-2" style="color: white; font-style: italic; font-weight: bold;">Good Afternoon .....</h3>';
        } else if (jamUcapan >= 18 && jamUcapan <= 24) {
            ucapan = '<h3 class="display-2" style="color: white; font-style: italic; font-weight: bold;">Good Night .....</h3>';
        }

        document.getElementById("ucapan").innerHTML = ucapan;
    </script>

</head>

<body>

    <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-right">
        <h2>Selamat Datang Admin !!</h2>
        <a data-dialog="somedialog" class="action-btn trigger">🕑 <strong id="jam"> </strong> : <strong id="menit"></strong> : <strong id="detik"></strong></a>
    </div>



</body>

</html>