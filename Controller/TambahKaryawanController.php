<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



include '../../IndoCaliPlast/Model/excel_reader.php';
include '../../IndoCaliPlast/Model/Karyawan.php';

if (isset($_POST['sub'])) {
    
    $k = new Karyawan();
    $con = $k->getKoneksi();
    $target = basename($_FILES['filepegawaiall']['name']);
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);

    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'], false);

//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index = 0);

//    jika kosongkan data dicentang jalankan kode berikut
    $drop = isset($_POST["drop"]) ? $_POST["drop"] : 0;
    if ($drop == 1) {
//             kosongkan tabel pegawai
        $truncate = "TRUNCATE TABLE karyawan";
        mysql_query($truncate);
    };

//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i = 2; $i <= $baris; $i++) {
        // $kk = $k->getMaxIdKaryawan();
//       membaca data (kolom ke-1 sd terakhir)
        $idkaryawan = $data->val($i, 1);
        $namakaryawan = $data->val($i, 2);
        $jabatan = $data->val($i, 3);

//      setelah data dibaca, masukkan ke tabel pegawai sql
        $query = "INSERT into karyawan (idkaryawan,namakaryawan,jabatan)values('$idkaryawan','$namakaryawan','$jabatan')";
        $hasil = mysqli_query($con, $query);
    }

    if (!$hasil) {
        die(mysql_error());
    } else {
        session_start();
        $_SESSION["tmbhk"] = 'Karyawan berhasil ditambahkan';
        header('Location: /View/TampilKaryawan.php');
    }

//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
} else {
    $idkaryawan = $_POST['idkaryawan'];
    $namakaryawan = $_POST['namakaryawan'];
    $jabatan = $_POST['jabatan'];
    $k = new Karyawan();
    $ck = $k->cekTableKaryawan();

    //$kk = $k->tambahAllKaryawan();
    $k->setIdkaryawan($idkaryawan);
    $k->setNamakaryawan($namakaryawan);
    $k->setJabatan($jabatan);
    $k->tambahKaryawan();
    session_start();
    $_SESSION["tmbhk"] = 'Karyawan berhasil ditambahkan';
    header('Location: /View/TampilKaryawan.php');
}




