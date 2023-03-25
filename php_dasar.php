<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Dasar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- <h1>Belajar PHP Dasar</h1> -->
        <?php 
            // echo "Hello World";
            // echo "<br>";
            // echo "Muhammad Al Fatih Muzakki";
        ?>

        <!-- <br> -->

        <!-- <h2>Menggunakan Variabel</h2> -->
        <?php 
            // $nim = "312110097";
            // $nama = "Muhammad Al Fatih Muzakki";
            // echo "Nim: $nim <br>";
            // echo "Nama: $nama <br>";
        ?>

        <!-- <h2>Predefine Variable $_GET</h2> -->
        <!-- <p>Selamat Datang <?php // echo $_GET["nama"]; ?></p> -->

        <!-- <h2>Form Input</h2>
        <form action="" method="post">
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama">
            <button type="submit" name="submit">Kirim</button>
        </form> -->

        <?php // if(isset( $_POST["submit"] )) : ?>
            <!-- <p>Selamat Datang, <?php // echo $_POST["nama"]; ?></p> -->
        <?php // endif; ?>

        <!-- <h2>Operator</h2> -->
        <?php 
        // $gaji = 5500000;
        // $pajak = 0.1;
        // $thp = $gaji - ($gaji * $pajak);
        // echo "Gaji sebelum pajak = Rp. $gaji <br>";
        // echo "Gaji yang dibawa pulan = Rp. $thp";
        ?>

        <!-- <h2>Kondisi IF</h2> -->
        <?php 
        // $namaHari = date("l");
        // if ( $namaHari == "Sunday" ) {
        //     echo "Minggu";
        // } elseif ($namaHari == "Monday") {
        //     echo "Senin";
        // } elseif ($namaHari == "Tuesday") {
        //     echo "Selasa";
        // } elseif ($namaHari == "Wednesday") {
        //     echo "Rabu";
        // } elseif ($namaHari == "Thursday") {
        //     echo "Kamis";
        // } elseif ($namaHari == "Friday") {
        //     echo "Jum'at";
        // } elseif ($namaHari == "Saturday") {
        //     echo "Sabtu";
        // } else {
        //     echo "Minggu";
        // }
        ?>

        <!-- <h2>Kondisi Switch</h2> -->
        <?php 
        // $namaHari = date("l");
        // switch ($namaHari) {
        //     case "Sunday" : 
        //         echo "Minggu";
        //         break;
        //     case "Monday" :
        //         echo "Senin";
        //         break;
        //     case "Tuesday" :
        //         echo "Selasa";
        //         break;
        //     case "Wednesday" :
        //         echo "Rabu";
        //         break;
        //     case "Thursday" :
        //         echo "Kamis";
        //         break;
        //     case "Friday" :
        //         echo "Jum'at";
        //         break;
        //     case "Saturday" :
        //         echo "Sabtu";
        //         break;
        //     default: 
        //         echo "Minggu";
        // }
        ?>

        <!-- <h2>Perulangan For</h2> -->
        <?php 
        // echo "Perulangan 1 sampai 10 <br><br>";
        // for ($i = 1; $i <= 10; $i++) {
        //     echo "Perulangan ke: $i <br>";
        // }

        // echo "<br><br>";
        // echo "Perulangan Menurun dari 1 sampai 10 <br><br>";
        // for ($i = 10; $i >= 1; $i--) {
        //     echo "Perulangan ke: $i <br>";
        // }
        ?>

        <!-- <h2>Perulangan Do While</h2> -->
        <?php 
        // echo "Perulangan 1 sampai 10 <br><br>";
        // $i = 1;
        // do {
        //     echo "Perulangan ke $i <br>";
        //     $i++;
        // } while ( $i <= 10);
        ?>

        <form action="" method="post">
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama">
            <br>
            <label for="tanggalLahir">Tanggal Lahir: </label>
            <input type="text" name="tanggalLahir" id="tanggalLahir">
        </form>
    </body>
</html>
