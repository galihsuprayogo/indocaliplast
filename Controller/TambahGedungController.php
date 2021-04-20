<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$idgedung = $_POST['idgedung'];
$namagedung = $_POST['namagedung'];
$lokasi = $_POST['lokasi'];

include '../../IndoCaliPlast/Model/Gedung.php';
$g = new Gedung();
$g->setIdgedung($idgedung);
$g->setNamagedung($namagedung);
$g->setLokasi($lokasi);
$g->tambahGedung();
session_start();
$_SESSION["tmbh"] = 'Gedung berhasil ditambahkan';
header('Location: /View/TampilGedung.php');

