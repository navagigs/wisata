<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

if($_GET['mode']=='input'){
	$nama_wisata	= $_POST['nama_wisata'];
	$alamat			= $_POST['alamat'];
	$Nama_Kecamatan	= $_POST['Nama_Kecamatan'];
	$Deskripsi		= $_POST['Deskripsi'];
	$Pilih_Kota		= $_POST['Pilih_Kota'];
	$Rute_Angkot	= $_POST['Rute_Angkot'];
	$Nama_Penginapan= $_POST['Nama_Penginapan'];
	$Nama_Kuliner	= $_POST['Nama_Kuliner'];
	$Nama_Budaya	= $_POST['Nama_Budaya'];
	
	$nama_file1		= $_FILES['image']['name'];
	$nama_file2		= $_FILES['image2']['name'];
	$nama_file3		= $_FILES['image3']['name'];
	$nama_file4		= $_FILES['image4']['name'];
	
	$lokasi_file1    = $_FILES['image']['tmp_name'];
  	$lokasi_file2    = $_FILES['image2']['tmp_name'];
	$lokasi_file3    = $_FILES['image3']['tmp_name'];
  	$lokasi_file4    = $_FILES['image4']['tmp_name'];
	
	move_uploaded_file($lokasi_file1,'././images/'.$nama_file1);
	move_uploaded_file($lokasi_file2,'././images/'.$nama_file2);
	move_uploaded_file($lokasi_file3,'././images/'.$nama_file3);
	move_uploaded_file($lokasi_file4,'././images/'.$nama_file4);

	$query=mysql_query("insert into tb_wisata(nama_wisata,Nama_Kecamatan,alamat,Deskripsi,Pilih_Kota,Rute_Angkot,Nama_Penginapan,Nama_Kuliner,Nama_Budaya,image,image2,image3,image4) 
												values(	'$nama_wisata',
														'$Nama_Kecamatan', 
														'$alamat',
														'$Deskripsi',
														'$Pilih_Kota',
														'$Rute_Angkot',
														'$Nama_Penginapan',
														'$Nama_Kuliner',
														'$Nama_Budaya',
														'$nama_file1',
														'$nama_file2',
														'$nama_file3',
														'$nama_file4')");
	
	
	if($query){
		?><script language="javascript">document.location.href="?page=wisata";</script><?php
	}
}

if($_GET['mode']=='update'){
	$id_wisata			= htmlentities($_POST['id_wisata']);
	$nama_wisata		= htmlentities($_POST['nama_wisata']);
	$Nama_Kecamatan		= htmlentities($_POST['Nama_Kecamatan']);
	$alamat				= htmlentities($_POST['alamat']);
	$Deskripsi			= htmlentities($_POST['Deskripsi']);
	$Pilih_Kota			= htmlentities($_POST['Pilih_Kota']);
	$Rute_Angkot		= htmlentities($_POST['Rute_Angkot']);
	$Nama_Penginapan	= htmlentities($_POST['Nama_Penginapan']);
	$Nama_Kuliner		= htmlentities($_POST['Nama_Kuliner']);
	$Nama_Budaya		= htmlentities($_POST['Nama_Budaya']);

	$nama_file1		= $_FILES['image']['name'];
	$nama_file2		= $_FILES['image2']['name'];
	$nama_file3		= $_FILES['image3']['name'];
	$nama_file4		= $_FILES['image4']['name'];

	
	$lokasi_file1    = $_FILES['image']['tmp_name'];
  	$lokasi_file2    = $_FILES['image2']['tmp_name'];
	$lokasi_file3    = $_FILES['image3']['tmp_name'];
  	$lokasi_file4    = $_FILES['image4']['tmp_name'];

	
	move_uploaded_file($lokasi_file1,'././images/'.$nama_file1);
	move_uploaded_file($lokasi_file2,'././images/'.$nama_file2);
	move_uploaded_file($lokasi_file3,'././images/'.$nama_file3);
	move_uploaded_file($lokasi_file4,'././images/'.$nama_file4);

	
	$query=mysql_query("UPDATE tb_wisata SET nama_wisata='$nama_wisata', Nama_Kecamatan='$Nama_Kecamatan', alamat='$alamat', Deskripsi='$Deskripsi', Pilih_Kota='$Pilih_Kota', Rute_Angkot='$Rute_Angkot', Nama_Penginapan='$Nama_Penginapan', Nama_Kuliner='$Nama_Kuliner', Nama_Budaya='$Nama_Budaya',  image='$nama_file1', image2='$nama_file2', image3='$nama_file3', image4='$nama_file4' WHERE id_wisata='$id_wisata'");
	
	if($query){
		?><script language="javascript">document.location.href="?page=wisata";</script><?php
	}
}

if($_GET['mode']=='edit'){
	$id_wisata=$_GET['id'];
	$edit=mysql_query("SELECT * FROM tb_wisata WHERE id_wisata='$id_wisata'");
	$data=mysql_fetch_array($edit);
	$nama_wisata=$data['nama_wisata'];
	$Nama_Kecamatan=$data['Nama_Kecamatan']);
	$alamat=$data['alamat'];
	$Deskripsi=$data['Deskripsi'];
	$Pilih_Kota=$data['Pilih_Kota'];
	$Rute_Angkot=$data['Rute_Angkot'];
	$Nama_Penginapan=$data['Nama_Penginapan'];
	$Nama_Kuliner=$data['Nama_Kuliner'];
	$Nama_Budaya=$data['Nama_Budaya'];
	$nama_file1=$data['image'];
	$nama_file2=$data['image2'];
	$nama_file3=$data['image3'];
	$nama_file4=$data['image4'];
	
	
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Data Wisata
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
								if($_GET['mode']=='edit'){
									?><form action="?page=wisata_edit&mode=update" method="post" enctype="multipart/form-data"><?php 
								}
								else{
									?><form action="?page=wisata_edit&mode=input" method="post" enctype="multipart/form-data">
								
								<?php
                                }
								?>
                                <div align="right">
                                
                                <a href="?page=wisata" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>	
                                </div>
                            <hr />
                            
                            </div>    
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wisata</label>
                                    <input type="text" class="form-control input-sm" name="nama_wisata" maxlength="30" value="<?php echo $nama_wisata; ?>">
                               </div>

                               <div class="form-group">
                                    <label for="exampleInputFile">Foto Wisata</label>
                                    <input type="file" id="exampleInputFile" name="image">  
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kecamatan</label>
                                    <input type="text" class="form-control input-sm" name="Nama_Kecamatan" maxlength="30" value="<?php echo $Nama_Kecamatan; ?>">
                               </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Wisata</label>
                                    <input type="text" class="form-control input-sm" name="alamat" maxlength="100" value="<?php echo $alamat; ?>">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <textarea type="text" class="form-control input-sm" name="Deskripsi" maxlength="800" rows="8"><?php echo $Deskripsi;?></textarea>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Pilih Kota</label>
                                    <select class="form-control input-sm" name="Pilih_Kota">
                                    	  <option value="0" selected>- Pilih Rute Angkutan Umum -</option>
                                          <option value="Bandung" <?php if($kategori=='Bandung'){ echo "selected"; } ?>>Dari Kota Bandung</option>
                                          <option value="Bogor" <?php if($kategori=='Bogor'){ echo "selected"; } ?>>Dari Kota Bogor</option>
                                          <option value="Sukabumi" <?php if($kategori=='Sukabumi'){ echo "selected"; } ?>>Dari Kota Sukabumi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rute Angkot</label>
                                    <textarea type="text" class="form-control input-sm" name="Rute_Angkot" maxlength="800" rows="8"><?php echo $Rute_Angkot;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Penginapan</label>
                                    <input type="text" class="form-control input-sm" name="Nama_Penginapan" maxlength="30" value="<?php echo $Nama_Penginapan; ?>">
                               </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Penginapan</label>
                                    <input type="file" id="exampleInputFile" name="image2">  
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kuliner</label>
                                    <input type="text" class="form-control input-sm" name="Nama_Kuliner" maxlength="30" value="<?php echo $Nama_Kuliner; ?>">
                               </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Kuliner</label>
                                    <input type="file" id="exampleInputFile" name="image3">   
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Budaya</label>
                                    <input type="text" class="form-control input-sm" name="Nama_Budaya" maxlength="30" value="<?php echo $Nama_Budaya; ?>">
                               </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Budaya</label>
                                    <input type="file" id="exampleInputFile" name="image4">  
                                </div>
                               
                        		<input type="hidden" name="id_wisata" value="<?php echo $id_wisata;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=wisata" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>