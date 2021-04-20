<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id = $_POST['id'];
$pwd = $_POST['pwd'];


if ($id == 'KShift' and $pwd == '12345') {
    session_start();
    $_SESSION["idkshift"] = $id;
    header('Location: /View/HomeAdmin.php');
} else {
    session_start();
    $_SESSION["eror"] = 'id pengguna atau kata sandi salah';
    header('Location: /View/FormLogin.php');
}
        
