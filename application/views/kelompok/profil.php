<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container-default" style="height: 500px">

    <div class="center-container">

        <div class="w3ls_banner_info">


            <h1>Profil</h1>
            <div class="profile">
                <div class="wrap">
                    <div class="profile-main">
                        <div class="profile-pic wthree">

                            <h3><?=$data['namakel']?></h3>
                            <div class="w3ls-agile-left">
                                <!---728x90--->

                                <ul class="address">
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Jenis Instanisi</b></li>
                                            <li> <span class="w3"><?= $data['jeniskel'] ?> </span></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul class="address-text">
                                            <li><b>Alamat Instansi</b></li>
                                            <li> <span class="w3"> <?= $data['alamatkel']?></span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Tanggal Berdiri</b></li>
                                            <li> <span class="w3"><?=tgl($data['tglber'])?></span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Nomor HP </b></li>
                                            <li> <span class="w3"><?=$data['nomorhp']?> </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Document Pendukung</b></li>
                                            <li><span class="w3"><a href="<?=base_url($data['documenpendukung'])?>"target="_blank">lihat Document </a> </span></li>
                                         </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Kategori </b></li>
                                            <li> <span class="w3"> <?=$data['namakat']?></span></></li>
                                        </ul>
                                    </li>

                                </ul>
                                <div class="clear"></div>
                            </div>

                        </div>
                    </div>
                </div>
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