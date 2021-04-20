<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../IndoCaliPlast/Model/Karyawan.php';
$k = new Karyawan();
$namak = $_POST['carikaryawan'];
$k->getCariKaryawan($namak);