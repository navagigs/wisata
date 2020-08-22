<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

if($_GET['mode']=='input'){
	$nama_hotel		= $_POST['nama_hotel'];
	$alamat			= $_POST['alamat'];
	$keterangan		= $_POST['keterangan'];
	$harga			= $_POST['harga'];
	$langitude		= $_POST['langitude'];
	$latitude		= $_POST['latitude'];
	
	$nama_file		= $_FILES['image']['name'];
	
	
	$lokasi_file    = $_FILES['image']['tmp_name'];
  	
	move_uploaded_file($lokasi_file,'././images/'.$nama_file);
	

	$query=mysql_query("insert into tb_hotel(nama_hotel,alamat,keterangan,harga,langitude,latitude,image) 
												values(	'$nama_hotel', 
														'$alamat',
														'$keterangan',
														'$harga',
														'$langitude',
														'$latitude',
														'$nama_file')");
	
	
	if($query){
		?><script language="javascript">document.location.href="?page=hotel";</script><?php
	}
}

if($_GET['mode']=='update'){
	$id_hotel		= htmlentities($_POST['id_hotel']);
	$nama_hotel		= htmlentities($_POST['nama_hotel']);
	$alamat			= htmlentities($_POST['alamat']);
	$keterangan		= htmlentities($_POST['keterangan']);
	$harga			= htmlentities($_POST['harga']);
	$langitude		= htmlentities($_POST['langitude']);
	$latitude		= htmlentities($_POST['latitude']);

	$nama_file		= $_FILES['image']['name'];
	
	
	$lokasi_file    = $_FILES['image']['tmp_name'];
  	
	
	move_uploaded_file($lokasi_file,'././images/'.$nama_file);
	
	
	$query=mysql_query("UPDATE tb_hotel SET nama_hotel='$nama_hotel', alamat='$alamat', keterangan='$keterangan', harga='$harga', langitude='$langitude', latitude='$latitude',  image='$nama_file' WHERE id_hotel='$id_hotel'");
	
	if($query){
		?><script language="javascript">document.location.href="?page=hotel";</script><?php
	}
}

if($_GET['mode']=='edit'){
	$id_hotel=$_GET['id'];
	$edit=mysql_query("SELECT * FROM tb_hotel WHERE id_hotel='$id_hotel'");
	$data=mysql_fetch_array($edit);
	$nama_hotel=$data['nama_hotel'];
	$alamat=$data['alamat'];
	$keterangan=$data['keterangan'];
	$harga=$data['harga'];
	$langitude=$data['langitude'];
	$latitude=$data['latitude'];
	$nama_file=$data['image'];
	
	
	
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Data Hotel
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
								if($_GET['mode']=='edit'){
									?><form action="?page=hotel_edit&mode=update" method="post" enctype="multipart/form-data"><?php 
								}
								else{
									?><form action="?page=hotel_edit&mode=input" method="post" enctype="multipart/form-data">
								
								<?php
                                }
								?>
                                <div align="right">
                                
                                <a href="?page=hotel" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>	
                                </div>
                            <hr />
                            
                            </div>    
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Hotel</label>
                                    <input type="text" class="form-control input-sm" name="nama_hotel" maxlength="30" value="<?php echo $nama_hotel; ?>">
                                </div>
								
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Hotel</label>
                                    <input type="text" class="form-control input-sm" name="alamat" maxlength="100" value="<?php echo $alamat; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <textarea type="text" class="form-control input-sm" name="keterangan" maxlength="500" rows="5"><?php echo $keterangan;?></textarea>
                                </div>
						<div class="form-group">
                                    <label for="exampleInputEmail1">Harga Hotel</label>
                                    <input type="text" class="form-control input-sm" name="harga" maxlength="30"  value="<?php echo $harga; ?>">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Latitude</label>
                                    <input type="text" class="form-control input-sm" name="latitude" maxlength="16" value="<?php echo $latitude; ?>">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Longitude</label>
                                    <input type="text" class="form-control input-sm" name="langitude" maxlength="16" value="<?php echo $langitude; ?>">
                                </div>
							
								<div class="form-group">
                                    <label for="exampleInputFile">File Gambar</label>
                                    <input type="file" id="exampleInputFile" name="image">   
                                </div>
								
                               
                        		<input type="hidden" name="id_hotel" value="<?php echo $id_hotel;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=hotel" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>