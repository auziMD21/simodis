<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-default" style="height: 600px">


    <div class="col-md-12">
        <ul class="topstats clearfix">
            <div class="col-md-4">
                <!-- Start TwitterBox -->
                <div class="widget socialbox" style="background:#f3a17a; height:205px;px;border-radius: 10px">

                    <span style="margin-left: 50px ;font-size: 30px" ><b><i class="fa fa-user" style="size: 20px"></i>&nbsp;INDIVIDU</span>
                    <h1 style="margin-left: 120px;font-size: 40px"><?php foreach ($individu as $u){ echo $u->jumlah;}?></h1>
                    <span style="margin-left: 70px ;font-size: 30px" >Pembaca</span>


                </div>
                <!-- End TwitterBox -->
            </div>
            <div class="col-md-4">
                <!-- Start TwitterBox -->
                <div class="widget socialbox" style="background:#02A8F3; height:205px;border-radius: 10px">

                    <span style="margin-left: 30px ;font-size: 30px" ><b><i class="fa fa-group" style="size: 20px"></i>&nbsp;KELOMPOK</span>
                    <h1 style="margin-left: 120px;font-size: 40px"><?php foreach ($kel as $u){ echo $u->jumlah;}?></h1>
                    <span style="margin-left: 70px ;font-size: 30px" >Pembaca</span>

                </div>
                <!-- End TwitterBox -->
            </div>
            <div class="col-md-4">
                <!-- Start TwitterBox -->
                <div class="widget socialbox" style="background:#26f321; height:205px;px;border-radius: 10px">

                    <span style="font-size: 25px" ><b><i class="fa fa-shopping-cart" style="size: 20px"></i>&nbsp;TOTAL PEMBACA</span>
                    <h1 style="margin-left: 110px;font-size: 40px"><?php foreach ($pembaca as $u){ echo $u->total;}?></h1>
                    <span style="margin-left: 90px ;font-size: 30px" >Orang</span>


                </div>
                <!-- End TwitterBox -->
            </div>
        </ul>
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