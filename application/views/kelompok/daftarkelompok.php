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
            <h1>Selamat Datang Kelompok Baru</h1>
            <h4>Riau Pos Intermedia</h4>
        </div>
        <div class="form-area">
            <h3 style="margin-left: 17px">Isi Lengkap Data Berikut</h3>
            <div class="group">
                <p> Username</p>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="group">
                <p> Password</p>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div><div class="group">
                <p> Nama Lengkap Instansi</p>
                <input type="text" name="namali" class="form-control" placeholder="Nama Lengkap Instansi">
            </div>
            <div class="group">
                <p> Jenis Instansi</p>
                <select name="jenisins" class="selectpicker" >
                    <option>----jenis Instansi---</option>
                    <option>Negeri</option>
                    <option>Swasta</option>
                </select>
            </div>
            <div class="group">
                <p> Alamat Instansi</p>
                <textarea type="text" name="alamat" class="form-control" ></textarea>
            </div>

            <p>Tanggal Berdiri</p>
            <div class="group">
                <input type="date" name="tanggalberdiri" class="form-control">
            </div>
            <div class="group">
                <p> Nomor Oficial</p>
                <input type="text" name="nomorof" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="group">
                <p> Document Pendukung</p>
                <input type="file" name="documenpendukung" class="form-control">
            </div>
            <div class="group">
                <p> Kategori Instansi</p>
                <select class="selectpicker" name="kategori">
                    <option>----kategori Instansi---</option>
                    <option value="DP">Dinas dan Pemerintahan</option>
                    <option value="IN">Instansi dan Perusahaan</option>
                    <option VALUE="IND">Individual</option>
                    <option value="PENDIK">Pendidikan</option>
                    <option VALUE="COR">CORPOSE</option>
                </select>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-default btn-block">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
