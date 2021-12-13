<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container-default" style="height: 600px">
    <div class="col-md-12">
        <div class="w3ls_banner_info">


            <h1>Profil Pembaca</h1>
            <div class="profile">
                <div class="wrap">
                    <div class="profile-main">
                        <div class="profile-pic wthree">
                            <div class="profile-pic wthree">
                                <img src="images/p1.jpeg" alt="" >
                            <h3><?=$data['namapem']?> </h3>
                            <div class="w3ls-agile-left">
                                <!---728x90--->
                                <ul class="address">
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Alamat Pembaca</b></li>
                                            <li> <span class="w3"> <?=$data['alamatpem']?></span></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul class="address-text">
                                            <li><b>Jenis Kelamin</b></li>
                                            <li> <span class="w3"> <?=$data['jenis_kelamin']?></span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Tanggal Lahir</b></li>
                                            <li> <span class="w3"><?=tgl($data['tgllahir'])?> </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Pekerjaan</b></li>
                                            <li> <span class="w3"><?=$data['pekerjaan']?> </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Foto kartu identitas</b></li>
                                            <li><span class="w3"><a <a href="<?=base_url($data['fotokartuidentitas'])?>" target="_blank">lihat Document </a> </span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="address-text">
                                            <li><b>Nomor HP </b></li>
                                            <li> <span class="w3"><?=$data['Nomor_Hp']?> </span></li>
                                        </ul>
                                    </li>
                                    <a class="btn btn-xs btn-danger" onclick="return ConfirmDelete();" href="<?= base_url() ?>individu/berhenti/<?= $data['Idpem'] ?>">Berhenti Berlangganan</a>
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
<script>    function ConfirmDelete()
    {
        var x = confirm("Apakah Kamu Yakin Berhenti jadi Pembaca?");
        if (x)
            return true;
        else
            return false;
    }</script>


</body>
</html>