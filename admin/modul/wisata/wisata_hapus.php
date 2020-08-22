
<?php
 
include"././koneksi.php";
$id = $_GET['id'];
$hps = mysql_query("DELETE FROM tb_wisata WHERE id_wisata=$id");
if($hps){
		?><script language="javascript">document.location.href="?page=wisata"</script><?php
	}
?>

