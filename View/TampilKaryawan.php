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
    </style>
    <?php
    include '../../IndoCaliPlast/Model/Karyawan.php';

    $karyawan = new Karyawan();
    ?>
    <body>
        <?php include '../../IndoCaliPlast/View/HeaderAdmin.php'; ?>
        <div class="container-fluid" id="cfctg">
            <div class="container-fluid w3-card w3-grey" id="cfwal">
                <h2> Daftar Karyawan PT. Indo Cali Plast</h2>
            </div>
            <?php
            if (!empty($_SESSION["tmbhk"])or ! empty($_SESSION["hpsk"]) or ! empty($_SESSION["editk"])) {
                ?>
                <div class="row">
                    <!--<div class="col-md-offset-5">-->
                    <?php if (!empty($_SESSION["tmbhk"])) {
                        ?>
                        <h2 style="color:blue;font-family: fantasy;text-align:center"> <?php echo $_SESSION["tmbhk"]; ?> </h2>  
                    <?php } else if (!empty($_SESSION["hpsk"])) {
                        ?>
                        <h2 style="color:blue;font-family: fantasy;text-align:center"> <?php echo $_SESSION["hpsk"]; ?> </h2>  
                        <?php
                    } else if (!empty($_SESSION["editk"])) {
                        ?>
                        <h2 style="color:blue;font-family: fantasy;text-align:center"> <?php echo $_SESSION["editk"]; ?> </h2>  

                        <?php
                    }
                    ?>
                    <!--</div>-->
                </div>

                <?php
                unset($_SESSION["tmbhk"]);
                unset($_SESSION["hpsk"]);
                unset($_SESSION["editk"]);
            }
            ?>
            <br>
            <div class="col-md-3 col-md-offset-9">
                <form action="/View/TampilKaryawan.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Berdasarkan nama karyawan" name="carikaryawan" style="font-family: monospace">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="carik"> <i class="glyphicon glyphicon-search"></i> </button>
                           
                        </div>
                    </div>
                </form>
            </div>
            <br>



            <div class="container" id="ctg" style="padding-top:3%">
                <table class="table table-striped w3-card text-center" >
                    <thead>
                        <tr>
                        <tr>
                            <td>Id Karyawan</td>
                            <td> Nama Karyawan</td>
                            <td> Jabatan</td>
                            <td>          </td>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                                    
                            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                            $limit = 10;
                            $limit_start = ($page - 1) * $limit;
                       if(empty($_POST['carikaryawan'])){
                            $kd = $karyawan->getLimit($limit_start, $limit);
                          
                       } else{
                           $namak = $_POST['carikaryawan'];
                           $kd = $karyawan->getCariKaryawan($namak);
                       }
                   
                            foreach ($kd as $data) {
                                ?>     
                                <tr>
                                    <td> <?php echo $data['idkaryawan'] ?> </td>
                                    <td> <?php echo $data['namakaryawan'] ?> </td>
                                    <td> <?php echo $data['jabatan'] ?> </td>              
                                    <td><a style="color:black;text-decoration:none" href="/View/FormEditKaryawan.php?id=<?php echo $data['idkaryawan'] ?>" <i class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Edit"> </i> </a> 
                                        <a style="color:black;text-decoration:none" href="/Controller/CRUDKaryawanController.php?id=<?php echo $data['idkaryawan'] ?>&aksi=hapus" <i class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"> </i> </a> </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-15" style="padding-left:1.3%">
                        <ul class="pagination">
                            <!-- LINK FIRST AND PREV -->
                            <?php
                            if ($page == 1) { // Jika page adalah page ke 1, maka disable link PREV
                                ?>
                                <li class="disabled"><a href="#">First</a></li>
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <?php
                            } else { // Jika page bukan page ke 1
                                $link_prev = ($page > 1) ? $page - 1 : 1;
                                ?>
                                <li><a href="/View/TampilKaryawan.php?page=1">First</a></li>
                                <li><a href="/View/TampilKaryawan.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
                                <?php
                            }
                            ?>

                            <!-- LINK NUMBER -->
                            <?php
                            // Buat query untuk menghitung semua jumlah data
//                include 'C:/xampp/htdocs/IndoCaliPlast/Model/Karyawan.php';
                            $k = new Karyawan();
                            
                            if(empty($_POST['carikaryawan'])){
                            $kk = $karyawan->getJumlahData();
                          
                            } else{
                           $namak = $_POST['carikaryawan'];
                           $kk = $karyawan->getJumlahDataResultSearch($namak);
                            }
//                            $kk = $k->getJumlahData();
                            foreach ($kk as $data) {
                                $numlim = intval($data['jumlah']);
                            }

                            $jumlah_page = ceil($numlim / $limit); // Hitung jumlah halamannya
                            $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
                            $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1; // Untuk awal link number
                            $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

                            for ($i = $start_number; $i <= $end_number; $i++) {
                                $link_active = ($page == $i) ? ' class="active"' : '';
                                ?>
                                <li<?php echo $link_active; ?>><a href="/View/TampilKaryawan.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php
                            }
                            ?>

                            <!-- LINK NEXT AND LAST -->
                            <?php
                            // Jika page sama dengan jumlah page, maka disable link NEXT nya
                            // Artinya page tersebut adalah page terakhir 
                            if ($page == $jumlah_page) { // Jika page terakhir
                                ?>
                                <li class="disabled"><a href="#">&raquo;</a></li>
                                <li class="disabled"><a href="#">Last</a></li>
                                    <?php
                                } else { // Jika Bukan page terakhir
                                    $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
                                    ?>
                                <li><a href="/View/TampilKaryawan.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                                <li><a href="/View/TampilKaryawan.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include '../../IndoCaliPlast/View/Footer.php'; ?>
    </body>
    <script>
        function validateForm()
        {
            function hasExtension(inputID, exts) {
                var fileName = document.getElementById(inputID).value;
                return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
            }

            if (!hasExtension('filepegawaiall', ['.xls'])) {
                alert("Hanya file XLS (Excel 2003) yang diijinkan.");
                return false;
            }
        }
        $(document).ready(function () {

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</html>
