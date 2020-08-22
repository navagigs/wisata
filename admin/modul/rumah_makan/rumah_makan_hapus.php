
<?php
 
include"././koneksi.php";
$id = $_GET['id'];
$hps = mysql_query("delete from tb_rmmakan where id_rumah_makan=$id");
if($hps){
		?><script language="javascript">document.location.href="?page=rumah_makan"</script><?php
	}
?>

