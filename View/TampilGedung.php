<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="lib/bootstrap/css/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="lib/datepicker/css/bootstrap-datepicker3.css"/>
    </head>
    <style>
        .container-fluid#cfctg{
            background-color:threedshadow;
            padding-top:5%; 
            padding-bottom:5%;
            height:100%;               
            border-bottom:2px solid threeddarkshadow;


        }
        .container#ctg{
            margin-top:3%;
            background-color:threeddarkshadow;
            border:0.3;
            border-width:thin;
            border-style:ridge;
            border-color:threedlightshadow;

            height:100%;
        }

        .container-fluid#cfwal > h2{
            font-size:large;
            font-style: normal;
            font-family: serif;
        }
        .table{
            padding-top:3%;
        }
    </style>
    <?php
    include '../../IndoCaliPlast/Model/Gedung.php';

    $gedung = new Gedung();
    $gg = $gedung->getGedung();
    ?>
    <body>
        <?php include '../../IndoCaliPlast/View/HeaderAdmin.php'; ?>
        <div class="container-fluid" id="cfctg">
            <div class="container-fluid w3-card w3-grey" id="cfwal">
                <h2> Daftar Gedung PT. Indo Cali Plast</h2>
            </div>
            <?php
            if (!empty($_SESSION["msg"]) or ! empty($_SESSION["hps"]) or ! empty($_SESSION["tmbh"])) {
                ?>
                <div class="row">
                    <!--<div class="col-md-offset-5">-->
                    <?php if (!empty($_SESSION["msg"])) {
                        ?>
                        <h2 style="color:blue;font-family: fantasy;text-align:center"> <?php echo $_SESSION["msg"]; ?> </h2>  
                        <?php
                    } else if (!empty($_SESSION["hps"])) {
                        ?>
                        <h2 style="color:blue;font-family: fantasy;text-align:center"> <?php echo $_SESSION["hps"]; ?> </h2>  
                    <?php } else {
                        ?>
                        <h2 style="color:blue;font-family: fantasy;text-align: center"> <?php echo $_SESSION["tmbh"]; ?> </h2>  
                        <?php
                    }
                    ?>
                    <!--</div>-->
                </div>
                <?php
                unset($_SESSION["msg"]);
                unset($_SESSION["hps"]);
                unset($_SESSION["tmbh"]);
            }
            ?>
            <div class="container" id="ctg" style="padding-top:3%">
                <table class="table table-striped w3-card text-center" >
                    <thead>
                        
                        <tr>
                            <td>Id Gedung</td>
                            <td> Nama Gedung</td>
                            <td> Lokasi</td>
                            <td>          </td>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php foreach ($gg as $data) {
                            ?>     
                            <tr>
                                <td> <?php echo $data['idgedung'] ?> </td>
                                <td> <?php echo $data['namagedung'] ?> </td>
                                <td> <?php echo $data['lokasi'] ?> </td>
                                <td><a style="color:black;text-decoration:none" href="/View/FormEditGedung.php?id=<?php echo $data['idgedung'] ?>" <i class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Edit"> </i> </a> 
                                    <a style="color:black;text-decoration:none" href="/Controller/CRUDGedungController.php?id=<?php echo $data['idgedung'] ?>&aksi=hapus" <i class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"> </i> </a> </td>
                                <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include '../../IndoCaliPlast/View/Footer.php'; ?>
    </body>
    <script>
        $(document).ready(function () {

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</html>
