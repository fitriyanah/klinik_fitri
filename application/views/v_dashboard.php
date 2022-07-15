<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "klinik_312010121";  

$koneksi = mysqli_connect($host, $user, $pass, $db);
?>


<div class="bg-light rounded-3 m-3">
    <div class="container-fluid py-5">
        
        <h1 style="color: #247881"> Selamat Datang</h1>
        <h4 style="color: #43919B">Sistem Aplikasi Klinik Fitri</h4>
    </div>



    <div class="pasien">
        <?php
        $queryJml = "SELECT * FROM pasien";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        ?>
        <div class="jml" style="font-size: 60px;">
            <?php
            echo "<b> $jml </b>";
            ?>
        </div>
        <p> Data Pasien </p>


    </div>
    <div class="dokter">
        <p> Data Dokter </p>
        <?php
        $queryJml = "SELECT * FROM dokter";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        ?>
        <div class="jml" style="font-size: 60px;">
            <?php
            echo "<b> $jml </b>";
            ?>
        </div>

    </div>
    <div class="obat">
        <?php
        $queryJml = "SELECT * FROM obat";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        ?>
        <div class="jml" style="font-size: 60px;">
            <?php
            echo "<b> $jml </b>";
            ?>
        </div>
        <p> Data Obat </p>


    </div>
    <div class="berobat">
        <p> Data Berobat </p>
        <?php
        $queryJml = "SELECT * FROM berobat";
        $jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
        ?>
        <div class="jml" style="font-size: 60px;">
            <?php
            echo "<b> $jml </b>";
            ?>
        </div>

    </div>
</div>