<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../IndoCaliPlast/Model/Karyawan.php';
$k = new Karyawan();
if ($_POST) {
    $idk = $_POST['idkaryawan'];
    $nam = $_POST['namakaryawan'];
    $kk = $k->editNamaKaryawan($idk, $nam);
    session_start();
    $_SESSION["editk"] = 'Data Karyawan berhasil diubah';
    header('Location: /View/TampilKaryawan.php');
} else {
    $idk = $_GET['id'];
    $kh = $k->hapusKaryawan($idk);
    session_start();
    $_SESSION["hpsk"] = 'Karyawan berhasil dihapus';
    header('Location: /View/TampilKaryawan.php');
}