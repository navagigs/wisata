
<?php
 
include"././koneksi.php";
$id = $_GET['id'];
$hps = mysql_query("DELETE FROM tb_infowisata WHERE Id_Wisata=$id");
	echo '<script type="text/javascript">
                                             alert("Data Berhasil Dihapus"); </script>';
if($hps){
		?><script language="javascript">document.location.href="?page=infowisata"</script><?php
	}
?>
