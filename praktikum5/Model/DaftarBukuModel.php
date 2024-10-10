<?php

require_once "Buku.php";

class DaftarBukuModel{

public function getDAta(){
    $daftar_buku = array(
        new Buku ('Belajar pemrograman Web', 'Robert t', 'Informatika', '2024'),
        new Buku ('Matematika diskrit', 'Rinaldi M.', 'Andi Publisher', '2017'),
        new Buku ('Kalkulus', 'Emely S', 'Airlangga', '2024'),
        new Buku ('Metodologi Penelitian', 'james w', 'Uin Publisher', '2018'),
    );

    return $daftar_buku;
}

public function getKolomTabel(){
    $kolom_tabel = array (
        'No', 'Judul', 'Pengarang', 'Penerbit', 'tahun'
    );

    return $kolom_tabel;
}
    
}