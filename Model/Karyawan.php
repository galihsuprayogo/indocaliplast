<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Karyawan
 *
 * @author Personal
 */
class Karyawan {

    //put your code here
    private $idkaryawan;
    private $namakaryawan;
    private $jabatan;

    function __construct() {
        
    }

    function getIdkaryawan() {
        return $this->idkaryawan;
    }

    function getNamakaryawan() {
        return $this->namakaryawan;
    }

    function getJabatan() {
        return $this->jabatan;
    }

    function setIdkaryawan($idkaryawan) {
        $this->idkaryawan = $idkaryawan;
    }

    function setNamakaryawan($namakaryawan) {
        $this->namakaryawan = $namakaryawan;
    }

    function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    public function getKoneksi() {
        $conn = new mysqli('localhost', 'root', '', 'indocp', '3306');
        return $conn;
    }

    public function tambahKaryawan() {
        $con = $this->getKoneksi();
        $query = "INSERT INTO karyawan values ('$this->idkaryawan', '$this->namakaryawan', '$this->jabatan');";

        mysqli_query($con, $query);
//        echo "input data berhasil";
        mysqli_close($con);
    }

    public function getKaryawan() {
        $con = $this->getKoneksi();
        $data = array();
        $query = "SELECT * FROM karyawan order by idkaryawan;";
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getLimit($limit_start, $limit) {
        $con = $this->getKoneksi();
        $data = Array();
        $query = "SELECT * FROM karyawan order by idkaryawan LIMIT " . $limit_start . "," . $limit . ";";
        $sql = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getJumlahData() {
        $con = $this->getKoneksi();
        $query = "SELECT COUNT(*) as jumlah FROM karyawan";
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $num[] = $row;
        }
        mysqli_close($con);
        return $num;
    }
    
    public function getJumlahDataResultSearch($namakaryawan){
        $con = $this->getKoneksi();
        $query = "Select COUNT(*) as jumlah from karyawan where namakaryawan like UPPER('%$namakaryawan%') or  LOWER ('%$namakaryawan%');";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getMaxIdKaryawan() {
        $con = $this->getKoneksi();
        $query = "select max(idkaryawan) from karyawan where idkaryawan like 'P%';";
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_array($sql);
        $stg = implode($row);
        $getid = (int) substr($stg, 1, 2);
        $getid++;
        //join again
        $maxid = "P" . sprintf("%02s", $getid);
        mysqli_close($con);
        return $maxid;
    }

    public function cekTableKaryawan() {
        $con = $this->getKoneksi();
        $query = "SELECT COUNT(*) as jumlah FROM karyawan";
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_row($sql);
        $bar = implode($row);
        return $bar;
    }

    public function hapusKaryawan($idkaryawan) {
        $con = $this->getKoneksi();
        $query = "DELETE FROM karyawan where idkaryawan='$idkaryawan';";
        $stmt = $con->prepare($query);
        $stmt->execute();
        mysqli_close($con);
    }

    public function getSatuKaryawan($idkaryawan) {
        $con = $this->getKoneksi();
        $query = "SELECT * FROM KARYAWAN where idkaryawan='$idkaryawan';";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function editNamaKaryawan($idkaryawan, $namakaryawan) {
        $con = $this->getKoneksi();
        $query = "UPDATE karyawan set namakaryawan='$namakaryawan' where idkaryawan='$idkaryawan';";
        $stmt = $con->prepare($query);
        $stmt->execute();
        mysqli_close($con);
    }

    public function getCariKaryawan($namakaryawan) {
        $con = $this->getKoneksi();
        $query = "Select * from karyawan where namakaryawan like UPPER('%$namakaryawan%') or  LOWER ('%$namakaryawan%');";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }
    
    public function getAllIdKaryawan(){
        $con = $this->getKoneksi();
        $query = "SELECT idkaryawan FROM KARYAWAN;";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

}
