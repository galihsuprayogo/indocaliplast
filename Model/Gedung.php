<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gedung
 *
 * @author Personal
 */
class Gedung {

    private $idgedung;
    private $namagedung;
    private $lokasi;

//    function __construct($idgedung, $namagedung, $kapasitas, $lokasi) {
//        $this->idgedung = $idgedung;
//        $this->namagedung = $namagedung;
//        $this->kapasitas = $kapasitas;
//        $this->lokasi = $lokasi;
//    }
    function __construct() {
        
    }

    function getIdgedung() {
        return $this->idgedung;
    }

    function getNamagedung() {
        return $this->namagedung;
    }

    function getLokasi() {
        return $this->lokasi;
    }

    function setIdgedung($idgedung) {
        $this->idgedung = $idgedung;
    }

    function setNamagedung($namagedung) {
        $this->namagedung = $namagedung;
    }

    function setLokasi($lokasi) {
        $this->lokasi = $lokasi;
    }

    public function getKoneksi() {
        $conn = new mysqli('localhost', 'root', '', 'indocp', '3306');
        return $conn;
    }

    public function tambahGedung() {
        $con = $this->getKoneksi();
        $query = "INSERT INTO gedung values ('$this->idgedung', '$this->namagedung', '$this->lokasi');";

        mysqli_query($con, $query);
        echo "input data berhasil";
        mysqli_close($con);
    }

    public function getGedung() {
        $con = $this->getKoneksi();
        $data = array();
        $query = "SELECT * FROM GEDUNG order by idgedung;";
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }

        mysqli_close($con);
        return $data;
    }

    public function getSatuGedung($idgedung) {
        $con = $this->getKoneksi();
        $query = "SELECT * FROM GEDUNG where idgedung='$idgedung';";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function editDataGedung($namag, $lok, $idg) {
        $con = $this->getKoneksi();
//        $query = "UPDATE gedung set namagedung = ?, lokasi = ? where idgedung = ?";
        $stmt = $con->prepare("UPDATE gedung set namagedung = ?, lokasi = ? where idgedung = ?");
        $stmt->bind_param("sss", $namag, $lok, $idg);
        $stmt->execute();
        $stmt->close();    
    }

//    public function editKapasitasGedung($idgedung, $kapasitas) {
//        $con = $this->getKoneksi();
//        $query = "UPDATE gedung set kapasitas=$kapasitas where  idgedung='$idgedung';";
//
//        $stmt = $con->prepare($query);
//        $stmt->execute();
//        mysqli_close($con);
//    }

    public function hapusGedung($idgedung) {
        $con = $this->getKoneksi();
        $query = "DELETE FROM gedung where idgedung='$idgedung';";
        $stmt = $con->prepare($query);
        $stmt->execute();
        mysqli_close($con);
    }

    public function getMaxIdGedung() {
        $con = $this->getKoneksi();
        $query = "select max(idgedung) from gedung where idgedung like 'G%';";
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_array($sql);
        $stg = implode($row);
        $getid = (int) substr($stg, 1, 2);
        $getid++;
        //join again
        $maxid = "G" . sprintf("%02s", $getid);
        mysqli_close($con);
        return $maxid;
    }
    
    public function getAllIdGedung(){
        $con = $this->getKoneksi();
        $query = "SELECT idgedung FROM GEDUNG;";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_row($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

//    public function getMaxIdtoReplace() {
//        $con = $this->getKoneksi();
//        $query = "select max(idgedung) from gedung;";
//        $sql = mysqli_query($con, $query);
//        $row = mysqli_fetch_row($sql);
//        $stg = implode($row);
//        return $stg;
//    }
//    public function replaceIdGedung($idgedung){
//        $oldId = $this->getMaxIdtoReplace();
//        if($idgedung == $oldId){
//            
//        } else{
//            $con = $this->getKoneksi();
//            $query = "update gedung set idgedung='$idgedung' where idgedung=";
//        }
//    }
}
