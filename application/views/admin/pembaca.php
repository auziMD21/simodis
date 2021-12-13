<!-- //////////////////////////////////////////////////////////////////////////// -->
<div class="content" style="width: 100%;height:auto;">

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="#">Admin</a></li>
        </ol>

        <!-- Start Page Header Right Div -->
        <!-- End Page Header Right Div -->

    </div>
    <!-- End Page Header -->
<!-- START CONTAINER -->
<div class="container-default" style="height: 1500px">
    <div class="col-md-12">
        <table id="example0" class="table table-bordered display">
            <thead>
            <tr>
                <th><center>No</center></th>
                <th><center>Nama Lengkap</center></th>
                <td><center>Alamat</center></td>
                <th width="10px"><center>Nama Instansi</center></th>
                <th><center>Status</center></th>
                <td><center>action</center></td>
            </tr>
            </thead>
            <tbody>
            <?php $n = 1; foreach ($tampil as $u){ ?>
            <tr>
                <td><?= $n++?></td>
                <td><?= $u->namapem;?></td>
                <td><?= $u->alamatpem;?></td>
                <td><?= $u->namakel;?></td>
                <td><label class="label label-success" style="padding: 5px;">Berlangganan</label></td>
                <td><a class="btn btn-xs btn-default"href="<?= base_url() ?>admin/lihat/<?= $u->Idpem?>"><label class="fa fa-file"> </label> </a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
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