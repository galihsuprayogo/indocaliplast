<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include '../../IndoCaliPlast/Model/Jadwal.php';
$j = new Jadwal();
$jj1 = $j->getJadwaMinggu1();
$jj2 = $j->getJadwaMinggu2();
$jj3 = $j->getJadwaMinggu3();
$jj4 = $j->getJadwaMinggu4();
?>
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
        .container-fluid#cfctj{
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
        .container#ctj{
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
        <div class="container-fluid" id="cfctj">
            <div class="container-fluid w3-card w3-grey" id="cfwal">
                <h2> Jadwal Karyawan Mekanik PT. Indo Cali Plast Bulan <?php echo date('F') ?></h2>
            </div>
            <br>
            <p class="p"> KETERANGAN SHIFT</p>
            <p class="p"> -------------------------------</p>
            <p class="p"> Hari Kerja : Senin - Sabtu</p>
            <p class="p"> Shift Pagi : 07:00 - 15:00 WIB</p>
            <p class="p"> Shift Siang : 15:00 - 23:00 WIB</p>
            <p class="p"> Shift Malam : 23:00 - 07:00 WIB</p>
            <br>
            <div class="col-md-3 col-md-offset-9">
                <form action="/View/TampilSearchJadwal.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Berdasarkan nama karyawan" name="carijadwalk" style="font-family: monospace">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="carij"> <i class="glyphicon glyphicon-search"></i> </button>

                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="container" id="ctj" style="padding-top:3%">
                <table class="table w3-card text-center" >
                    <thead > 
                        <tr><td style="color:white;"> Minggu ke-1  </tr> 
                        <tr>
                            <td style="color:white;background-color: threedface">          </td>
                            <td style="color:white;background-color: threedface">Shift Pagi</td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam </td>
                        </tr>
                    </thead>
                    <tbody style="background-color:white">                    
                        <?php for ($k = 1; $k <= count($jj1); $k++) { ?>
                            <tr>
                                <?php if ($k == 1) { ?>
                                    <td>  Gedung 1 </td>
                                    <?php for ($aa = 0; $aa < 5; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj1[$aa]) . " &" ?>
                                                <?php echo implode($jj1[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 7) { ?>
                                    <td>  Gedung 2 </td>
                                    <?php for ($aa = 6; $aa < 11; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj1[$aa]) . " &" ?>
                                                <?php echo implode($jj1[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 13) { ?>
                                    <td>  Gedung 3 </td>
                                    <?php for ($aa = 12; $aa < 17; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj1[$aa]) . " &" ?>
                                                <?php echo implode($jj1[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>                             
                </table>
                <table class="table w3-card text-center" >
                    <thead> 
                        <tr><td style="color:white"> Minggu ke-2 </td> </tr> 
                        <tr>
                            <td style="color:white;background-color: threedface">          </td>
                            <td style="color:white;background-color: threedface">Shift Pagi</td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam </td>
                        </tr>
                    </thead>
                    <tbody style="background-color:white">                    
                        <?php for ($k = 1; $k <= count($jj2); $k++) { ?>
                            <tr>
                                <?php if ($k == 1) { ?>
                                    <td>  Gedung 1 </td>
                                    <?php for ($aa = 0; $aa < 5; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj2[$aa]) . " &" ?>
                                                <?php echo implode($jj2[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 7) { ?>
                                    <td>  Gedung 2 </td>
                                    <?php for ($aa = 6; $aa < 11; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj2[$aa]) . " &" ?>
                                                <?php echo implode($jj2[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 13) { ?>
                                    <td>  Gedung 3 </td>
                                    <?php for ($aa = 12; $aa < 17; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj2[$aa]) . " &" ?>
                                                <?php echo implode($jj2[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>                             
                </table>
                <table class="table w3-card text-center" >
                    <thead> 
                        <tr style="color:white"><td> Minggu ke-3 </td> </tr> 
                        <tr>
                            <td style="color:white;background-color: threedface">          </td>
                            <td style="color:white;background-color: threedface">Shift Pagi</td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam </td>
                        </tr>
                    </thead>
                    <tbody style="background-color:white">                    
                        <?php for ($k = 1; $k <= count($jj3); $k++) { ?>
                            <tr>
                                <?php if ($k == 1) { ?>
                                    <td>  Gedung 1 </td>
                                    <?php for ($aa = 0; $aa < 5; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj3[$aa]) . " &" ?>
                                                <?php echo implode($jj3[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 7) { ?>
                                    <td>  Gedung 2 </td>
                                    <?php for ($aa = 6; $aa < 11; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj3[$aa]) . " &" ?>
                                                <?php echo implode($jj3[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 13) { ?>
                                    <td>  Gedung 3 </td>
                                    <?php for ($aa = 12; $aa < 17; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj3[$aa]) . " &" ?>
                                                <?php echo implode($jj3[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>                             
                </table>
                <table class="table w3-card text-center" >
                    <thead> 
                        <tr><td style="color:white"> Minggu ke-4 </td> </tr> 
                        <tr>
                            <td style="color:white;background-color: threedface">          </td>
                            <td style="color:white;background-color: threedface">Shift Pagi</td>
                            <td style="color:white;background-color: threedface"> Shift Siang</td>
                            <td style="color:white;background-color: threedface"> Shift Malam </td>
                        </tr>
                    </thead>
                    <tbody style="background-color:white">                    
                        <?php for ($k = 1; $k <= count($jj4); $k++) { ?>
                            <tr>
                                <?php if ($k == 1) { ?>
                                    <td>  Gedung 1 </td>
                                    <?php for ($aa = 0; $aa < 5; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj4[$aa]) . " &" ?>
                                                <?php echo implode($jj4[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 7) { ?>
                                    <td>  Gedung 2 </td>
                                    <?php for ($aa = 6; $aa < 11; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj4[$aa]) . " &" ?>
                                                <?php echo implode($jj4[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php if ($k == 13) { ?>
                                    <td>  Gedung 3 </td>
                                    <?php for ($aa = 12; $aa < 17; $aa++) { ?>  
                                        <?php if (($aa % 2) == 0) { ?>
                                            <td>  
                                                <?php echo implode($jj2[$aa]) . " &" ?>
                                                <?php echo implode($jj2[$aa + 1]) ?>
                                            </td>
                                        <?php } ?>

                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>                             
                </table>
            </div>
        </div>
        <?php include '../../IndoCaliPlast/View/Footer.php'; ?>
    </body>
</html>
