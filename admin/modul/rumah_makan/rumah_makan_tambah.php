<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";


if($_GET['mode']=='input'){
	$nama_rumah_makan	= $_POST['nama_rumah_makan'];
	$alamat			= $_POST['alamat'];
	$keterangan		= $_POST['keterangan'];
	$harga		    = $_POST['harga'];
	$langitude		= $_POST['langitude'];
	$latitude		= $_POST['latitude'];
	
	$nama_file		= $_FILES['image']['name'];
	
	
	$lokasi_file    = $_FILES['image']['tmp_name'];
  	
	
	move_uploaded_file($lokasi_file,'././images/'.$nama_file);
	

	$query=mysql_query("insert into tb_rmmakan(nama_rumah_makan,alamat,keterangan,harga,langitude,latitude,image) 
												values(	'$nama_rumah_makan',
														'$alamat',
														'$keterangan',
														'$harga',
														'$langitude',
														'$latitude',
														'$nama_file')");
	
	
	if($query){
		?><script language="javascript">document.location.href="?page=rumah_makan";</script><?php
	}

	
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Rumah Makan
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
								if($_GET['mode']=='edit'){
									?><form action="?page=rumah_makan_tambah&mode=update" method="post" enctype="multipart/form-data"><?php 
								}
								else{
									?><form action="?page=rumah_makan_tambah&mode=input" method="post" enctype="multipart/form-data">
								
								<?php
                                }
								?>
                                <div align="right">
                                
                                <a href="?page=rumah_makan" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>	
                                </div>
                            <hr />
                            
                            </div>    
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Rumah Makan</label>
                                    <input type="text" class="form-control input-sm" name="nama_rumah_makan" maxlength="30" value="<?php echo $nama_rumah_makan; ?>">
                                
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Rumah Makan</label>
                                    <input type="text" class="form-control input-sm" name="alamat" maxlength="100" value="<?php echo $alamat; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan </label>
                                    <textarea type="text" class="form-control input-sm" name="keterangan" maxlength="500" rows="5"><?php echo $keterangan;?></textarea>
                                </div>
						<div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input type="text" class="form-control input-sm" name="harga" maxlength="500" rows="5" value="<?php echo $harga; ?>">
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
                                    <label for="exampleInputFile">File Gambar </label>
                                    <input type="file" id="exampleInputFile" name="image">   
                                
                                </div>
								
                               
                        		<input type="hidden" name="id_rumah_makan" value="<?php echo $id_rumah_makan;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=rumah_makan" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>