<?php
//file cek.php untuk cek data
include"koneksi.php";

$last = $_GET['id_slcl1'];
$sql = "select * from tb_suratskck1 where id_skck1='$last'";
$rs = mysql_query($sql);
//output berupa json
if(mysql_num_rows($rs) > 0){
$lastSql = "select max(id) from tb_suratskck1";
$lastId = mysql_fetch_array(mysql_query($lastSql));
echo '{"result":"new data","last":"'.$lastId[0].'"}';
}else{
echo '{"result":false}';
}