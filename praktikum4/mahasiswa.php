<?php
require_once "KoneksiDb.php";

class mahasiswa {
    protected $nama;
    protected $nim;
    protected $prodi;
    protected $fakultas;
    protected KoneksiDb $koneksi;

    public function __construct()
    {
        $this->koneksi = new koneksiDb ('localhost', 'root', '', 'siakad');
    }

    public function setNama ($nama){
        $this->nama = $nama;
    }

    public function setNim ($nim){
        $this->nim = $nim;
    }

    public function setprodi ($prodi){
        $this->prodi = $prodi;
    }

    public function setFakultas ($fakultas){
        $this->fakultas = $fakultas;
    }

    public function getNama (){
        return $this->nama;
    }
    
    public function getNim (){
        return $this->nim;
    } 

    public function getprodi (){
        return $this->prodi;
    }

    public function  getfakultas (){
        return $this->fakultas;
    }


    public function create () {
        $con = $this->koneksi->getconnection();
        $sqlQuery = 'INSERT INTO mahasiswa (nama, nim, prodi, fakultas) VALUES (?,?,?,?)';
        $statement = $con->prepare($sqlQuery);
        $statement->bind_param('ssss', $nama, $nim, $prodi, $fakultas);

        $nama= $this->nama;
        $nim= $this->nim;
        $prodi= $this->prodi;
        $fakultas= $this->fakultas;

        $statement->execute();
        $statement->close();
    }
        
    
        
    

    public function update(){

    }

    public function read(){

    }

    public function deleate(){

    }
}