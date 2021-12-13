<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Laporan Distribusi</title>

</head>

<body bgcolor="white" style="margin-left: 200px;margin-right: 100px;margin-bottom: 100px">
<center>
    <img src="<?= base_url() ?>assets/templates/img/images.png" alt="icon" class="icon" height=80px" width="70px">

</center><br>
 <p align="center"> PT. RIAU POS INTERMEDIA </p></font>
<font face="Arial" color="black"> <p align="center">PERUSAHAAN PENERBIT DAN PERCETAKAN  </p></font>
<font face="Arial" color="black" size="3"> <p align="center"> JL.H.R SOEBRANTAS KM 10.5 TELP(0761)64633, Fax (0761)64640 Pekanbaru  </p></font>
<hr>

<font face="Arial" color="black" size="6"> <p align="center"> <u> <b> Laporan Pendistribusian</b></u></font><br>
<font face="Arial" color="black" size="4"> Tanggal:  <?php $date = Date("Y-m-d H:i:s");Echo  $date; ?>  </p></font>
<p  style="font-size: 18px ">
    &nbsp;    &nbsp;    &nbsp;    &nbsp; Dengan ini kami sampaikan bahwasanya jumlah pembaca yang membaca surat kabar Riau Pos berjumlah:
</p>
<pre>
<h1 align="center"><?php foreach ($pembaca as $u){ echo $u->total;}?></h1>
</pre>
<p  style="font-size: 18px "><font face="Arial">
     &nbsp;    &nbsp;    &nbsp;    &nbsp;   Yang mana total pembaca didapat dari  <?php foreach ($individu as $u){ echo $u->jumlah;}?>  pembaca individu dan <?php foreach ($kel as $u){ echo $u->jumlah;}?> berasal dari jumlah pembaca yang terdaftar disetiap kelompok yang berkerjasama dengan  PT RIAU POS INTERMEDIA maka dari itu Surat Kabar yang dicetak Berdasakan Jumlah pembaca yang terdaftar
    </font></p>
<p  style="font-size: 18px"><font face="Arial">    &nbsp;    &nbsp;    &nbsp;    &nbsp;Sekian kami sampaikan laporan ini mohon dimaklumi</font></p>
<p  align="right"><font face="Arial">Hormat Kami</font></p><br><br><br><br>
<p  align="right"><font face="Arial"> Bidang Pemasaran</font></p>
<a class="btn btn-xs btn-default" onclick="myFunction()">   <img src="<?= base_url() ?>assets/templates/img/prin.png" alt="icon" class="icon" ></a>
</body>

<script>
    function myFunction() {
        window.print();
    }
</script>
</html>