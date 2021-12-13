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

<div class="login-form" style="width: 600px">
    <form action="<?= base_url() ?>kelompok/kelompokRegist" method="POST" enctype="multipart/form-data">
        <div class="top">
            <img src="<?= base_url() ?>assets/templates/img/images.png" alt="icon" class="icon">
            <h1>Selamat Datang Pembaca Baru<br> Registrasi akun anda berhasil<br>Admin akan mengkonfirmasi akun dalam kurun waktu 1 x 15 menit </h1>
            <h4>Riau Pos Intermedia</h4>
        </div>

        <div class="form-area">

            <a href="<?= base_url() ?>individu/" class="btn btn-default btn-block">login</a>
        </div>


    </form>
</div>

</body>
</html>
