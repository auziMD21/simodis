<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 29/06/2018
 * Time: 11.41
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>Riau Pos Intermedia</title>

    <!-- ========== Css Files ========== -->
    <link href="<?= base_url() ?>assets/templates/css/root.css" rel="stylesheet">
    <style type="text/css">
        body{background: #F5F5F5;}
    </style>
</head>
<body>

<div class="login-form">
    <form action="<?= base_url() ?>individu/individuLogin" method="POST">
        <div class="top">
            <img src="<?= base_url() ?>assets/templates/img/images.png" alt="icon" class="icon">
            <h1>Selamat Datang</h1>
            <h4>Riau Pos Intermedia</h4>
        </div>
        <div class="form-area">
            <div class="group">
                <input type="text" class="form-control"  name="username"  placeholder="Username">
                <i class="fa fa-user"></i>
            </div>
            <div class="group">
                <input type="password" class="form-control" name="password" placeholder="password" >
                <i class="fa fa-key"></i>
            </div>
            <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
    </form>
    <div class="footer-links row">
        <div class="col-xs-6"><a href="<?= base_url() ?>individu/daftarbaru"><i class="fa fa-external-link"></i> Register Now</a></div>
    </div>
</div>

</body>
</html>
