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
    <form action="<?= base_url() ?>individu/Registbaru" method="POST" enctype="multipart/form-data">
        <div class="top">
            <img src="<?= base_url() ?>assets/templates/img/images.png" alt="icon" class="icon">
            <h1>Selamat Datang Member Baru</h1>
            <h4>Riau Pos Intermedia</h4>
        </div>
        <div class="form-area">
            <h3 style="margin-left: 17px">Isi Lengkap Data Berikut</h3>
            <div class="form-area">
                <div class="group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="group">
                    <textarea type="text" class="form-control"name="alamat" placeholder="Alamat"></textarea>
                </div>
                <div class="group">
                    <p> Jenis Kelamin</p>
                    <select class="selectpicker" name="jk" >
                        <option>----jenis kelamin---</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <p>Tanggal Lahir</p>
                <div class="group">
                    <input type="date" class="form-control" name="tgl" placeholder="Tanggal Lahir">
                </div>
                <div class="group">
                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                </div>
                <div class="group">
                    <p>foto kartu identidas</p>
                    <input type="File" class="form-control" name="ktp" placeholder="Kartu Identitas">
                </div>
                <div class="group">
                    <input type="text" class="form-control" name="nohp" placeholder="Nomor Hp">
                </div>
            <button type="submit" class="btn btn-default btn-block">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
