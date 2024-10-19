<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{

    public function jalankan(){

        //menggunakan Model
        $dataModel = new DaftarBukuModel();

        //mengirim datamodel ke BukuView dan menampilkanya
        include "view/BukuView.php";
    }
}