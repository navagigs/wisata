<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

if($_GET['mode']=='input'){
	$wisata   = $_POST['wisata'];
    $Alamat         = $_POST['Alamat'];
    $Deskripsi      = $_POST['Deskripsi'];
    $Nama_Penginapan= $_POST['Nama_Penginapan'];
    $Nama_Kuliner   = $_POST['Nama_Kuliner'];
    $Nama_Budaya    = $_POST['Nama_Budaya'];
    $bdg            = $_POST['bdg'];
    $bogor          = $_POST['bogor'];
    $sukabumi       = $_POST['sukabumi'];
    $latitude       = $_POST['latitude'];
    $longitude      = $_POST['longitude'];
    
	
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

    if(isset($_POST['submit'])){
                                    if($wisata == "" && $nama_file1 =="" && $Alamat =="" && $Deskripsi =="" && $latitude =="" && $longitude =="") {
                                        echo '<script type="text/javascript">
                                             alert("Anda harus mengisi data dengan lengkap"); </script>';
                                        }
                                    elseif(empty($wisata)){    //jika nama kosong maka muncul pesan
                                        echo '<script type="text/javascript">
                                             alert("Harap Masukkan Nama Wisata...!!!"); </script>';
                                    }
                                    elseif(empty($nama_file1)){ //jika kategori kosong maka muncul pesan
                                        echo '<script type="text/javascript">
                                             alert("Harap Masukkan Foto Wisata...!!!"); </script>';
                                    }
                                    elseif(empty($Alamat)){ //jika kategori kosong maka muncul pesan
                                        echo '<script type="text/javascript">
                                             alert("Harap Masukkan Alamat Wisata...!!!"); </script>';
                                    }
                                    elseif(empty($Deskripsi)){ //jika kategori kosong maka muncul pesan
                                        echo '<script type="text/javascript">
                                             alert("Harap Masukkan Deskripsi Wisata...!!!"); </script>';
                                    }
                                    elseif(empty($latitude)){ //jika kategori kosong maka muncul pesan
                                        echo '<script type="text/javascript">
                                             alert("Harap Masukkan Latitude Wisata...!!!"); </script>';
                                    }
                                    elseif(empty($longitude)){ //jika kategori kosong maka muncul pesan
                                        echo '<script type="text/javascript">
                                             alert("Harap Masukkan Longitude Wisata...!!!"); </script>';
                                    }
                                    else{
                                        $query=mysql_query("insert into tb_infowisata(wisata,Alamat,Deskripsi,Nama_Penginapan,Nama_Kuliner,Nama_Budaya,bdg,bogor,sukabumi,latitude,longitude,image,image2,image3,image4) 
                                                values( '$wisata',
                                                        '$Alamat',
                                                        '$Deskripsi',
                                                        '$Nama_Penginapan',
                                                        '$Nama_Kuliner',
                                                        '$Nama_Budaya',
                                                        '$bdg',
                                                        '$bogor',
                                                        '$sukabumi',
                                                        '$latitude',
                                                        '$longitude',
                                                        '$nama_file1',
                                                        '$nama_file2',
                                                        '$nama_file3',
                                                        '$nama_file4')");
                                        echo '<script type="text/javascript">
                                             alert("Data Berhasil Disimpan"); </script>';

                                    }
                                }
        if($query){
        ?><script language="javascript">document.location.href="?page=infowisata";</script><?php
    }


	
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Form Tambah Data Wisata
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
								if($_GET['mode']=='edit'){
									?><form action="?page=infowisata_tambah&mode=update" method="post" enctype="multipart/form-data"><?php 
								}
								else{
									?><form action="?page=infowisata_tambah&mode=input" method="post" enctype="multipart/form-data">
								
								<?php
                                }
								?>
                                <div align="right">
                                
                                <a href="?page=infowisata" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>	
                                </div>
                            <hr />
                            
                            </div>    
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wisata</label>
                                    <input type="text" class="form-control input-sm" name="wisata" maxlength="30" value="<?php echo $wisata; ?>">
                                </div>
								 <div class="form-group">
                                    <label for="exampleInputFile">Foto Wisata</label>
                                    <input type="file" id="exampleInputFile" name="image">  
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Wisata</label>
                                    <input type="text" class="form-control input-sm" name="Alamat" maxlength="100" value="<?php echo $Alamat; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Latitude</label>
                                    <input type="text" class="form-control input-sm" name="latitude" maxlength="30" value="<?php echo $latitude; ?>">
                               </div>
                               <div class="form-group">
                                    <label for="exampleInputEmail1">Longitude</label>
                                    <input type="text" class="form-control input-sm" name="longitude" maxlength="30" value="<?php echo $longitude; ?>">
                               </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <textarea type="text" class="form-control input-sm" name="Deskripsi" maxlength="800" rows="8"><?php echo $Deskripsi;?></textarea>
                                </div>

                               <tr>
                                   <td><strong>Rute Angkutan Umum</strong></td>
                                 </tr>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Dari Bandung</label>
                                    <textarea type="text" class="form-control input-sm" name="bdg" maxlength="800" rows="8"><?php echo $bdg;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dari Bogor</label>
                                    <textarea type="text" class="form-control input-sm" name="bogor" maxlength="800" rows="8"><?php echo $bogor;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dari Sukabumi</label>
                                    <textarea type="text" class="form-control input-sm" name="sukabumi" maxlength="800" rows="8"><?php echo $sukabumi;?></textarea>
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
                               
                        		<input type="hidden" name="Id_Wisata" value="<?php echo $Id_Wisata;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=infowisata" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>

                            </form>
                    
                            </div>

                        </div>
                    </section>

            </div>
        </div>