<?php
 
include"././koneksi.php";
$id= $_GET['id'];
$hps = mysql_query("delete from tb_rute where Id_Rute=$id");
if($hps){
		?><script language="javascript">document.location.href="?page=rute"</script><?php
	}
?>