
<?php
 
include"././koneksi.php";
$id = $_GET['id'];
$hps = mysql_query("delete from tb_hotel where id_hotel=$id");
if($hps){
		?><script language="javascript">document.location.href="?page=hotel"</script><?php
	}
?>

