<?php
    include "orang.php";
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div>
        <?php
            // proses instansiasi
            $mahasiswa = new orang ('Diah Novinda') ;

             // menggunakan setter dan getter
            $mahasiswa->setnama('Diah novinda');
            $mahasiswa->setTglLahir('2005-11-19');
            $mahasiswa->setAlamat('batang asai, sarolangun');

            echo "<br>";
            echo "data Mahasiswa ". $mahasiswa->getNama() . "<br>";
            echo "Nama : " . $mahasiswa->getNama() . "<br>";
            echo "Tgl Lahir : " . $mahasiswa->getTglLahir() . "<br>";
            echo "Alamat : " . $mahasiswa->getAlamat() . "<nr>";

            // memanggil method
            $mahasiswa->ucapkanSalam();

            echo "<Br>";

            $mahasiswa2 = new orang('Na Jaemin');

            $mahasiswa2->ucapkanSalam();

        ?>
    </div>

</body>
</html>