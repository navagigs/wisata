<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

date_default_timezone_set('Asia/Kuala_lumpur');
$tgl_posting  = date("Y-m-d H:i:s");

if($_GET['mode']=='input'){
    $penulis   = $_POST['penulis'];
    $judul         = $_POST['judul'];
    $kategori         = $_POST['kategori'];
    $deskripsi     = $_POST['deskripsi'];
    $tgl_posting          = $_POST['tgl_posting'];
    
    
    $nama_file      = $_FILES['image']['name'];
    
    
    $lokasi_file    = $_FILES['image']['tmp_name'];
    
    
    move_uploaded_file($lokasi_file,'././images/'.$nama_file);
    

    $query=mysql_query("insert into tb_info(penulis,judul,kategori,deskripsi,tgl_posting,image) 
                                                values( '$penulis',
                                                        '$judul',
                                                        '$kategori',
                                                        '$deskripsi',
                                                        '$tgl_posting',
                                                        '$nama_file')");
    
    
    if($query){
        ?><script language="javascript">document.location.href="?page=info";</script><?php
    }   
}
if($_GET['mode']=='update'){
    $id_info        = htmlentities($_POST['id_info']);
    $penulis      = htmlentities($_POST['penulis']);
    $judul         = htmlentities($_POST['judul']);
    $kategori      = htmlentities($_POST['kategori']);
    $deskripsi       = htmlentities($_POST['deskripsi']);
    $tgl_posting       = htmlentities($_POST['tgl_posting']);


    $nama_file      = $_FILES['image']['name'];
    
    
    $lokasi_file    = $_FILES['image']['tmp_name'];
    
    
    move_uploaded_file($lokasi_file,'././images/'.$nama_file);


    
    $query=mysql_query("UPDATE tb_info SET penulis='$penulis', judul='$judul', kategori='$kategori', deskripsi='$deskripsi', tgl_posting='$tgl_posting', image='$nama_file'  WHERE id_info='$id_info'");
    
    if($query){
        ?><script language="javascript">document.location.href="?page=info";</script><?php
    }
}

if($_GET['mode']=='edit'){
    $id_info=$_GET['id'];
    $edit=mysql_query("SELECT * FROM tb_info WHERE id_info='$id_info'");
    $data=mysql_fetch_array($edit);
    $penulis=$data['penulis'];
    $judul=$data['judul'];
    $kategori=$data['kategori'];
    $deskripsi=$data['deskripsi'];
    $tgl_posting=$data['tgl_posting'];
    $nama_file=$data['image'];
    
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Informasi
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
                                if($_GET['mode']=='edit'){
                                    ?><form action="?page=info_edit&mode=update" method="post" enctype="multipart/form-data"><?php 
                                }
                                else{
                                    ?><form action="?page=info_edit&mode=input" method="post" enctype="multipart/form-data">
                                
                                <?php
                                }
                                ?>
                                <div align="right">
                                
                                <a href="?page=info" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>    
                                </div>
                            <hr />
                            
                            
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input type="text" class="form-control input-sm" name="judul" maxlength="100" value="<?php echo $judul; ?>">
                                </div>

                                </div>    
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penulis</label>
                                    <input type="text" class="form-control input-sm" name="penulis" maxlength="30" value="<?php echo $penulis; ?>">
                                

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <select class="form-control input-sm" name="kategori">
                                          <option value="0" selected>- Pilih Kategori Informasi -</option>
                                          <option value="BERITA" <?php if($kategori=='BERITA'){ echo "selected"; } ?>>BERITA</option>
                                          <option value="EVENT" <?php if($kategori=='EVENT'){ echo "selected"; } ?>>EVENT</option>
                                    </select>
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi </label>
                                    <textarea type="text" class="form-control input-sm" name="deskripsi"  rows="5"><?php echo $deskripsi;?></textarea>
                                </div>
                        <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control input-sm" name="tgl_posting" value="<?php echo $tgl_posting; ?>">
                                </div>                         
                                <div class="form-group">
                                    <label for="exampleInputFile">File Gambar </label>
                                    <input type="file" id="exampleInputFile" name="image">   
                                
                                </div>
                                
                               
                                <input type="hidden" name="id_info" value="<?php echo $id_info;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=info" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>