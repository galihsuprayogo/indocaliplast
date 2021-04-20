<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jadwal
 *
 * @author Personal
 */
include '../../IndoCaliPlast/Model/Karyawan.php';
include '../../IndoCaliPlast/Model/Gedung.php';

class Jadwal {

    private $idjadwal;
    private $shift;
    private $minggu;

    function __construct() {
        
    }

    public function getKoneksi() {
        $conn = new mysqli('localhost', 'root', '', 'indocp', '3306');
        return $conn;
    }

    public function getMaxIdJadwalIncrement() {
        $con = $this->getKoneksi();
        $query = "select max(idjadwal) from jadwal where idjadwal like 'J%';";
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_array($sql);
        $stg = implode($row);
        $getid = (int) substr($stg, 1, 2);
        $getid++;
        //join again
        $maxid = "J" . sprintf("%02s", $getid);
        mysqli_close($con);
        return $maxid;
    }

    public function getMaxIdJadwal() {
        $con = $this->getKoneksi();
        $query = "select max(idjadwal) from jadwal;";
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_row($sql);
        $stg = implode($row);
        return $stg;
    }

    public function cekTableGedung() {
        $con = $this->getKoneksi();
        $query = "SELECT COUNT(*) as jumlah FROM gedung";
        $sql = mysqli_query($con, $query);
        $row = mysqli_fetch_row($sql);
        $bar = implode($row);
        return $bar;
    }

    public function insertJadwal() {
        $con = $this->getKoneksi();
        $this->idjadwal = $this->getMaxIdJadwalIncrement();
        $query = "INSERT INTO jadwal values ('$this->idjadwal');";
        mysqli_query($con, $query);
        mysqli_close($con);
    }

    public function insertDetailJadwal($idjadwal, $idkaryawan, $idgedung, $shift, $minggu) {
        $con = $this->getKoneksi();
        $query = "INSERT INTO detailjadwal values ('$idjadwal', '$idkaryawan', '$idgedung', '$shift', '$minggu');";
        mysqli_query($con, $query);
        mysqli_close($con);
    }

    public function getJadwaMinggu1() {
        $con = $this->getKoneksi();
        $maxidj = $this->getMaxIdJadwal();
        $query = "SELECT k.`namakaryawan` FROM karyawan k, detailjadwal d WHERE d.`idkaryawan` = k.`idkaryawan` "
                . "and idjadwal='$maxidj' and minggu='Minggu 1';";
//        $query = "SELECT idkaryawan FROM detailjadwal WHERE minggu='Minggu 1' and idjadwal='$maxidj';";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_row($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getJadwaMinggu2() {
        $con = $this->getKoneksi();
        $maxidj = $this->getMaxIdJadwal();
        $query = "SELECT k.`namakaryawan` FROM karyawan k, detailjadwal d WHERE d.`idkaryawan` = k.`idkaryawan` "
                . "and idjadwal='$maxidj' and minggu='Minggu 2';";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_row($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getJadwaMinggu3() {
        $con = $this->getKoneksi();
        $maxidj = $this->getMaxIdJadwal();
        $query = "SELECT k.`namakaryawan` FROM karyawan k, detailjadwal d WHERE d.`idkaryawan` = k.`idkaryawan` "
                . "and idjadwal='$maxidj' and minggu='Minggu 3';";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_row($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getJadwaMinggu4() {
        $con = $this->getKoneksi();
        $maxidj = $this->getMaxIdJadwal();
        $query = "SELECT k.`namakaryawan` FROM karyawan k, detailjadwal d WHERE d.`idkaryawan` = k.`idkaryawan` "
                . "and idjadwal='$maxidj' and minggu='Minggu 4';";
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_row($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function getJadwalKaryawan($namakaryawan) {
        $con = $this->getKoneksi();
        $maxidj = $this->getMaxIdJadwal();
        $query = "SELECT k.`namakaryawan`, d.`idgedung`, d.`shift`  FROM karyawan k, detailjadwal d  WHERE d.`idkaryawan`= k.`idkaryawan` "
                . "AND idjadwal = '$maxidj' AND k.`namakaryawan` like UPPER('%$namakaryawan%') or  LOWER ('%$namakaryawan%');";
      
        $data = array();
        $sql = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
        mysqli_close($con);
        return $data;
    }

    public function buatJadwal() {
        $k = new Karyawan();
        $g = new Gedung();
        $this->shift = Array('Shift Pagi', 'Shift Siang', 'Shift Malam');
        $this->minggu = Array('Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4');

        $this->insertJadwal();
        $kk = $k->getAllIdKaryawan();
        $gg = $g->getAllIdGedung();

        $arr = $arr_history = $kk;
        for ($x = 0; $x < count($this->minggu); $x++) {
            for ($y = 0; $y < count($gg); $y++) {
                for ($z = 0; $z < count($this->shift); $z++) {
                    // If the history array is empty, re-populate it.
                    if (empty($arr_history))
                        $arr_history = $arr;
                    // Select a random key.
                    $key = array_rand($arr_history, 2);
                    // Save the record in $selected.
                    $selected = $arr_history[$key[0]];
                    $selected2 = $arr_history[$key[1]];
                    // Remove the key/pair from the array.
                    unset($arr_history[$key[0]]);
                    unset($arr_history[$key[1]]);

                    //convert to String
                    $var1 = implode($selected);
                    $var2 = implode($selected2);
                    $idg = implode($gg[$y]);

                    //call max id jadwal             
                    $idj = $this->getMaxIdJadwal();
                    $sh = $this->shift[$z];
                    $mg = $this->minggu[$x];

                    //insert into database detail jadwal
                    $this->insertDetailJadwal($idj, $var1, $idg, $sh, $mg);
                    $this->insertDetailJadwal($idj, $var2, $idg, $sh, $mg);
                }
            }
        }
    }

}
