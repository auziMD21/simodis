<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 03/09/2018
 * Time: 20.30
 */
?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="content" style="width: 100%;">

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

<div class="container-default" style="height: 1000px">
    <div class="col-md-12">
        <h3>Daftar pemohon jadi Kelompok Pembaca</h3>
        <table id="example0" class="table table-bordered display">
            <thead>
            <tr>
                <th><center>No</center></th>
                <th><center>Nama Instansi</center></th>
                <th><center>Alamat Instansi</center></th>
                <td><center>Tahun Berdiri</center></td>
                <th><center>No HP Instansi</center></th>
                <th><center>Document Pendukung</center></th>
                <th><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach($data as $d):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$d['namakel']?></td>
                <td nowrap><?=$d['alamatkel']?></td>
                <td nowrap><?=tgl($d['tglber'])?></td>
                <td><?=$d['nomorhp']?></td>
                <td><a href="<?=base_url($d['documenpendukung'])?>"target="_blank">lihat Document </a></td>
                <td>    <?php
                    if($d['status'] == '0') {
                        ?>
                        <a href="<?=base_url('admin/updateStatus/'.$d['idkel'].'/1')?>"><button class="btn btn-xs btn-success">Konfirmasi</button></a>
                        <a href="<?=base_url('admin/updateStatus/'.$d['idkel'].'/2')?>"><button class="btn btn-xs btn-danger">Tolak</button></a>
                        <?php
                    }
                    else if($d['status'] == '1') {
                        ?>
                        <button class="btn btn-xs btn-success">Sudah Bergabung</button>
                        <?php
                    }
                    else if($d['status'] == '2') {
                    ?>
                    <button class="btn btn-xs btn-danger">Ditolak</button>
                    <?php
                    }
                    ?>

                </td>
            </tr>
                <?php
                $no++;
            endforeach;
            ?>
            </tbody>

        </table>
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
