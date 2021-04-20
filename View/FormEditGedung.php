<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin </title>
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

        <style>
            .container-fluid#cfctg{
                background-color:threedshadow;
                padding-top:5%; 
                padding-bottom:5%;
                height:100%;               
                border-bottom:2px solid threeddarkshadow;


            }
            .container#ctg{
                margin-top:5%;
                padding-top:3%;
                background-color:threeddarkshadow;
                border:0.3;
                border-width:thin;
                border-style:ridge;
                border-color:threedlightshadow;
                width:50%;
                /*height:100%;*/
            }

            .container-fluid#cfwal > h2{
                font-size:large;
                font-style: normal;
                font-family: serif;
            }
            .container .form-horizontal{
                margin-top:5%;
                margin-bottom:5%;
            }

        </style>
    </head>
    <?php
    include '../../IndoCaliPlast/Model/Gedung.php';
    if (empty($_GET['id'])) {
        die("id gedung null");
    } else {

        $idg = $_GET['id'];
        $g = new Gedung();
        $ge = $g->getSatuGedung($idg);
        foreach ($ge as $data) {
            ?>
            <body>
                <?php include '../../IndoCaliPlast/View/HeaderAdmin.php'; ?>
                <div class="container-fluid" id="cfctg">
                    <div class="container-fluid w3-card w3-grey" id="cfwal">
                        <h2> Mengedit Gedung</h2>
                    </div>          
                    <div class="container" id="ctg">
                        <form class="form-horizontal" id="myform" action="/Controller/CRUDGedungController.php" method="post">                   
                            <div class="form-group">
                                <label class="col-sm-3 col-sm-offset-2 " for="inputIdGedung">Id Gedung</label>

                                <div class="col-sm-5"><input name="idgedung" class="form-control" id="idgedung" value="<?php echo $data["idgedung"] ?>" placeholder="" type="text" readonly=""></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-sm-offset-2 " for="inputIdGedung">Nama Gedung</label>
                                <div class="col-sm-5"><input name="namagedung" class="form-control" id="namagedung" placeholder="" value="<?php echo $data['namagedung'] ?>" type="text" ></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-sm-offset-2 " for="inputLokasiiGedung">Lokasi</label>
                                <div class="col-sm-5"><input name="lokasi" class="form-control" id="lokasi" placeholder="" value="<?php echo $data['lokasi'] ?>" type="text" ></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-sm-offset-5">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <button type="submit" name="submit" class="btn btn-default pull-left">Simpan</button>
                                                </td>
                                                <td style="padding-left:4%">
                                                    <input type="button" id="rstbuton" name="button" value="Batal" class="btn btn-default">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        <?php include '../../IndoCaliPlast/View/Footer.php'; ?>
    </body>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#rstbuton").click(function () {
               
                $("#myform")[0].reset();
            });
        });
    </script>
</html>
