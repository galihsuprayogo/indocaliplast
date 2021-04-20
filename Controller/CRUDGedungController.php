<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../IndoCaliPlast/Model/Gedung.php';
$g = new Gedung();
if ($_POST) {
    $idg = $_POST['idgedung'];
    $namag = $_POST['namagedung'];
    $lok = $_POST['lokasi'];
    $gg = $g->editDataGedung($namag, $lok, $idg);
    session_start();
    $_SESSION["msg"] = 'Data gedung berhasil diubah';
    header('Location: /View/TampilGedung.php');
} else {
    $id = $_GET['id'];
    $gh = $g->hapusGedung($id);
    session_start();
    $_SESSION["hps"] = 'Gedung berhasil dihapus';
    header('Location: /View/TampilGedung.php');
}



