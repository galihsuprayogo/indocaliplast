<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/bootstrap/css/w3.css" rel="stylesheet">
    </head>
    <style>
        .clog{
            height: 100%;
            width:100%;     
            padding-top:5%;
            background-color:white;    
        }
        .clog2{
            margin-top:5%;
            margin-bottom:5%;
            text-align: center;
            background-color:threeddarkshadow;
            border:2px solid white;
            width:40%;
            height:40%;
            /* height:auto; */
        }

        .mother{
            padding-top:10%;
            padding-bottom:10%;
        }
    </style>
</head>
<body>
    <div class="container-fluid clog">
        <div class="container clog2">
            <div class="row mother"> 
                <div class="col-md-offset-1 col-md-10">
                    <?php
                    if (!empty($_SESSION["eror"])) {
                        ?>
                        <div class="row">
                            <h2 style="padding-bottom:4%;color:red;font-family: fantasy"> <?php echo $_SESSION["eror"]; ?> </h2>  
                        </div>
                        <?php
                        unset($_SESSION["eror"]);
                    }
                    ?>
                </div>
                <form action="/Controller/LoginController.php" method="post">
                    <div class="row" style="padding-bottom:6%">
                        <div class="col-md-offset-0 col-md-12">
                            <?php echo "<img src='logo.png' height=170em>"; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="control-label" for="email"> Id Pengguna </label>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <input type="text" class="form-control" id="idadmin" name="id" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="control-label" for="pwd"> Kata Sandi </label>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <input type="password" class="form-control" id="kataSandi" name="pwd" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="padding-top:2%">
                            <div class="col-md-offset-2 col-md-8">
                                <button type="submit" class="btn btn-default btn-lg btn-block"> Masuk </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
