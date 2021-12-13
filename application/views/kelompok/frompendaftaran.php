<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/06/2018
 * Time: 10.18
 */
?>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container-default" style="height: 800px">
   <div class="col-md-12 col-lg-6" style="margin-left: 270px">
        <div class="panel panel-default">

            <div class="panel-title">
              <center><p style="font-size:40px">Tambah</p></center>
              <center>  <h4>Pembaca Baru</h4></center>
            </div>
    <div class="panel-body">
        <form action="<?= base_url() ?>kelompok/tambahPem" method="post" enctype="multipart/form-data">
            <div class="form-area">
                <div class="group">
                    <input type="text" class="form-control" name="nama"placeholder="Nama Lengkap">
                </div>
                <div class="group">
                    <br>
                    <p> Jenis Kelamin</p>
                    <select class="selectpicker" name="jk">
                        <option>----jenis kelamin---</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <br>
                <div class="group">
                    <textarea type="text" name="alamat" class="form-control" placeholder="Alamat"></textarea>
                </div>
                <br>
                <p>Tanggal Lahir</p>
                <div class="group">
                    <input type="date" name="tgl" class="form-control" placeholder="Tanggal Lahir">
                </div>
                <br>
                <div class="group">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                </div>
                <br>
                <div class="group">
                    <input type="text" name="nohp" class="form-control" placeholder="Nomor Hp">
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-default btn-block">Submit</button>
            </div>
        </form>
    </div>


</div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- Start Footer -->
<div class="row footer">
    <div class="col-md-6 text-left">
        Copyright © 2015 <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Riau Pos</a> All rights reserved.
    </div>
    <div class="col-md-6 text-right">
        Design and Developed by <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Riau Pos</a>
    </div>
</div>
<!-- End Footer -->


</div>
<!-- End Content -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START SIDEPANEL -->
<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// -->



<!-- ================================================
jQuery Library
================================================ -->

<script type="text/javascript" src="<?= base_url() ?>assets/templates/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="<?= base_url() ?>assets/templates/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="<?= base_url() ?>assets/templates/js/plugins.js"></script>


</body>
</html>
