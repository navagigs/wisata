<?php 
include"koneksi.php";
$query="select * from tb_referensisurat";
$q=mysql_query($query);
$data=mysql_fetch_array($q);
echo $data['kd_surat'].' / '.$_POST['nomor'].' / '.$data['ket'].' / '.$data['tahun'];
?>