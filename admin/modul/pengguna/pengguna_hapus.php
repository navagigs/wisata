
<?php
 
include"././koneksi.php";
$id= $_GET['id'];
$hps = mysql_query("delete from tb_staff where user_id=$id");
	echo '<script type="text/javascript">
                                             alert("Data Berhasil Dihapus"); </script>';
if($hps){
		?><script language="javascript">document.location.href="?page=pengguna"</script><?php
	}
?>

