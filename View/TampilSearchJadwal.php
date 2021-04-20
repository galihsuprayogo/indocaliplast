<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../../IndoCaliPlast/Model/Jadwal.php';
$j = new Jadwal();
$namakaryawan = $_POST['carijadwalk'];
$jj = $j->getJadwalKaryawan($namakaryawan);
$shift = array_column($jj, 'shift');
$gedung = array_column($jj, 'idgedung');
$karyawan = array_column($jj, 'namakaryawan');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        .container-fluid#cfctsj{
            background-color:threedshadow;
            padding-top:5%; 
            padding-bottom:5%;
            height:100%;               
            border-bottom:2px solid threeddarkshadow;
            color: peru;
            font-family:serif;
            font-variant:inherit;
            word-spacing:normal;
            text-align: center;

        }
        .container#ctsj{
            margin-top:3%;
            background-color:threeddarkshadow;
            border:0.3;
            border-width:thin;
            border-style:ridge;
            border-color:threedlightshadow;

            /*height:100%;*/
        }

        .container-fluid#cfwal > h2{
            font-size:large;
            font-style: normal;
            font-family: serif;
        }
        .table{
            padding-top:3%;
        }
        .p{
            color:whitesmoke;
        }

    </style>
    <body>
        <?php include '../../IndoCaliPlast/View/Header.php'; ?>

        <div class="container-fluid" id="cfctsj">
            <div class="container-fluid w3-card w3-grey" id="cfwal">
                <h2> Jadwal Karyawan Mekanik PT. Indo Cali Plast Bulan <?php echo date('F') ?></h2>
            </div>
            <div class="container" id="ctsj" style="padding-top:3%">
                <table class="table  w3-card text-center" >
                    <thead>
                        <tr><td style="color:white;"> Minggu ke-1  </tr>
                        <tr>
                            <td style="color:white;background-color: threedface"> </td>
                            <td style="color:white;background-color: threedface"> Shift Pagi </td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam</td>
                        </tr>

                    </thead>
                    <tbody style="background-color:white">
                        <?php for ($i = 0; $i < 1; $i++) { ?>
                            <tr>
                                <td> Gedung 1</td>
                                <?php for ($j = 0; $j < 1; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 0; $i < 1; $i++) { ?>
                            <tr>
                                <td> Gedung 2</td>
                                <?php for ($j = 0; $j < 1; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 0; $i < 1; $i++) { ?>
                            <tr>
                                <td> Gedung 3</td>
                                <?php for ($j = 0; $j < 1; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table class="table  w3-card text-center" >
                    <thead>
                        <tr><td style="color:white;"> Minggu ke-2  </tr>
                        <tr>
                            <td style="color:white;background-color: threedface"> </td>
                            <td style="color:white;background-color: threedface"> Shift Pagi </td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam</td>
                        </tr>

                    </thead>
                    <tbody style="background-color:white">
                        <?php for ($i = 1; $i < 2; $i++) { ?>
                            <tr>
                                <td> Gedung 1</td>
                                <?php for ($j = 1; $j < 2; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 1; $i < 2; $i++) { ?>
                            <tr>
                                <td> Gedung 2</td>
                                <?php for ($j = 1; $j < 2; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 1; $i < 2; $i++) { ?>
                            <tr>
                                <td> Gedung 3</td>
                                <?php for ($j = 1; $j < 2; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table class="table  w3-card text-center" >
                    <thead>
                        <tr><td style="color:white;"> Minggu ke-3  </tr>
                        <tr>
                            <td style="color:white;background-color: threedface"> </td>
                            <td style="color:white;background-color: threedface"> Shift Pagi </td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam</td>
                        </tr>

                    </thead>
                    <tbody style="background-color:white">
                        <?php for ($i = 2; $i < 3; $i++) { ?>
                            <tr>
                                <td> Gedung 1</td>
                                <?php for ($j = 2; $j < 3; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 2; $i < 3; $i++) { ?>
                            <tr>
                                <td> Gedung 2</td>
                                <?php for ($j = 2; $j < 3; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 2; $i < 3; $i++) { ?>
                            <tr>
                                <td> Gedung 3</td>
                                <?php for ($j = 2; $j < 3; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table class="table  w3-card text-center" >
                    <thead>
                        <tr><td style="color:white;"> Minggu ke-4  </tr>
                        <tr>
                            <td style="color:white;background-color: threedface"> </td>
                            <td style="color:white;background-color: threedface"> Shift Pagi </td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam</td>
                        </tr>

                    </thead>
                    <tbody style="background-color:white">
                        <?php for ($i = 3; $i < 4; $i++) { ?>
                            <tr>
                                <td> Gedung 1</td>
                                <?php for ($j = 3; $j < 4; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G01') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 3; $i < 4; $i++) { ?>
                            <tr>
                                <td> Gedung 2</td>
                                <?php for ($j = 3; $j < 4; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G02') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php for ($i = 3; $i < 4; $i++) { ?>
                            <tr>
                                <td> Gedung 3</td>
                                <?php for ($j = 3; $j < 4; $j++) { ?>
                                    <td> <?php if (($shift[$j] == 'Shift Pagi') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Siang') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                    <td> <?php if (($shift[$j] == 'Shift Malam') and $gedung[$i] == 'G03') echo $karyawan[$j] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include '../../IndoCaliPlast/View/Footer.php'; ?>
</body>
</html>
