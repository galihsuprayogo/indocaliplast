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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/bootstrap/css/w3.css" rel="stylesheet">
    </head>
    <style media="screen">

        .navbar{
            margin-bottom: 0;
            border-radius: 0;

        }
        .navbar-fixed-top { /* ubah background nav*/
            background-color:dimgrey;
            border-top:0.5px inset dimgrey;
            border-left:0.5px inset dimgrey;
            border-right:0.5px inset dimgrey;
            border-bottom:0.1px inset dimgrey;


        }
        .navbar-fixed-top .navbar-nav > li > a{
            color:threedlightshadow;  /*ubah warna font dasar*/
        }
        .navbar-fixed-top .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus{
            background-color:snow;
            color:threedlightshadow; /* ubah warna font dan backround tidak aktif*/
        }
        .navbar-fixed-top .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active >
        a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
            background-color:snow;
            color:threedlightshadow; /*ubah warna font dan background saat aktif*/
        }
        .navbar-fixed-top .navbar-nav > li#l05{
            /*border-left-style:solid;
            border-left-width:2px;
            border-left-color:threedlightshadow;
            border-right-style:solid;
            border-right-width:2px;
            border-right-color:threedlightshadow;*/

        }

        .navbar-fixed-top  .navbar-nav  {
            /*border-left-style:solid;
            border-left-width:2px;
            border-left-color:threedlightshadow;
            border-right-style:solid;
            border-right-width:2px;
            border-right-color:threedlightshadow;*/
            /*margin-left:5%;*/
        }

        .navbar-fixed-top .navbar-brand:hover,
        .navbar-fixed-top .navbar-brand:focus {
            background-color:snow;
            color:threedlightshadow; /*ubah warna font dan background tidak aktif*/
        }

        .navbar-fixed-top .navbar-brand{
            color:threedlightshadow; /* warna dasar dari brand*/

        }
        .dropdown{
            /*border-left-style:solid;
            border-left-width:2px;
            border-left-color:threedlightshadow;*/
        }
        .dropdown .dropdown-menu{
            background-color:dimgrey;


        }


        .dropdown .dropdown-menu > li > a{
            color:threedlightshadow;
            text-align:right;
            font-size:medium;
            height:100%;
        }

        .dropdown .dropdown-menu > .active > li > a{
            color:threedlightshadow;
            /*                text-align:right;
                            font-size:medium;
                            height:100%;*/
        }
        .dropdown .dropdown-menu > li > a#k01{
            border-bottom-style:solid;
            border-bottom-width:2px;
            border-bottom-color:threedlightshadow;
            padding-top:0%;
            margin-top:0%;
        }


        .dropdown-menu > li > a:hover{
            background-color:snow;
            color:threedlightshadow;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-fixed-top w3-card">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left" >
                    <a class="navbar-brand" href="/index.php"><img title="Halaman Utama" class="img-" src="/lib/img/logo.png" alt="" style="width:4em;height:2.5em;margin-top:-0.75em"></a>
                    <li id="l01" ><a href="/View/TampilJadwalK.php"> <span class="glyphicon glyphicon-eye-open"></span> Lihat Jadwal </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="105"><a href="/View/FormLogin.php"> <span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>