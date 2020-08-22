
<?php
 
include"././koneksi.php";
$id= $_GET['id'];
$hps = mysql_query("delete from tb_kecamatan where Id_Kecamatan=$id");
if($hps){
		?><script language="javascript">document.location.href="?page=kecamatan"</script><?php
	}
?>

