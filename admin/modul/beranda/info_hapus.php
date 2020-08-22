
<?php
 
include"././koneksi.php";
$id= $_GET['id'];
$hps = mysql_query("delete from tb_info where id_info=$id");
if($hps){
		?><script language="javascript">document.location.href="?page=info"</script><?php
	}
?>

