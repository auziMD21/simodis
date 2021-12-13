<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container-default" style="height: 1000px;width: 100%">
    <div class="col-md-12">
        <a href="<?= base_url() ?>kelompok/tambahpembaca" class="btn btn-rounded btn-default"><i class="fa fa-plus"></i>Tambah Pembaca</a>
     <br>
        <br>
        <table id="example0" class="table table-bordered display">
            <thead>
            <tr>
                <th><center>No</center></th>
                <th><center>Nama Lengkap</center></th>
                <td><center>Alamat</center></td>
                <th><center>Pekerjaan</center></th>
                <th><center>Status</center></th>
                <th><center>Action</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach($data as $d):
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $d['namapem'] ?></td>
                    <td nowrap><?= $d['alamatpem'] ?></td>
                    <td><?= $d['pekerjaan'] ?></td>
                    <td><label class="btn btn-xs btn-success">Berlangganan</label></td>
                    <td><a class="btn btn-xs btn-default"href="<?= base_url() ?>kelompok/lihat/<?= $d['Idpem'] ?>"><label class="fa fa-file"> </label> </a>
                        <a class="btn btn-xs btn-danger" onclick="return ConfirmDelete();" href="<?= base_url() ?>kelompok/hapus/<?= $d['Idpem'] ?>"><label class="fa fa-trash"></label></a></td>
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
<script>    function ConfirmDelete()
    {
        var x = confirm("Apakah Kamu Yakin Menghapus Pembaca Ini ?");
        if (x)
            return true;
        else
            return false;
    }</script>

</body>
</html>