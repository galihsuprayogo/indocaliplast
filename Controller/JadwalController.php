<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../IndoCaliPlast/Model/Jadwal.php';
$j = new Jadwal();
$jj = $j->buatJadwal();

if (!$jj) {
    session_start();
    $_SESSION["jad"] = 'Jadwal Baru Berhasil dibuat';
    header('Location: /View/TampilJadwal.php');
} else {
     session_start();
    $_SESSION["jad"] = 'Jadwal Gagal dibuat';
    header('Location: /View/TampilJadwal.php');
}