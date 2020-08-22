<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

date_default_timezone_set('Asia/Kuala_lumpur');
//$tgl_posting  = date("Y-m-d H:i:s");

if($_GET['mode']=='input'){
    $Pilih_Kota     = $_POST['Pilih_Kota'];
    $Rute_Angkot    = $_POST['Rute_Angkot'];
    $id_wisata      = $_POST['id_wisata'];
    $nama_wisata    = $_POST['nama_wisata'];


    $query=mysql_query("insert into tb_rute(nama_wisata,Rute_Angkot,Rute_Angkot) 
                                                values( '$nama_wisata', 
                                                        '$Pilih_Kota',
                                                        '$Rute_Angkot',)");
    
    
    if($query){
        ?><script language="javascript">document.location.href="?page=rute";</script><?php
    }   
}
if($_GET['mode']=='update'){
    $Id_Rute           = htmlentities($_POST['Id_Rute']);
    $nama_wisata       = htmlentities($_POST['nama_wisata']);
    $Pilih_Kota        = htmlentities($_POST['Pilih_Kota']);
    $Rute_Angkot       = htmlentities($_POST['Rute_Angkot']);
    
    //$query=mysql_query("UPDATE tb_rute SET nama_wisata='$nama_wisata', Pilih_Kota='$Pilih_Kota', Rute_Angkot='$Rute_Angkot' WHERE Id_Rute='$Id_Rute'");
    $sql=mysql_query("SELECT tb_rute.*, tb_wisata.nama_wisata FROM tb_rute, tb_wisata WHERE tb_rute.Id_Rute=tb_wisata.Id_Rute");

    if($query){
        ?><script language="javascript">document.location.href="?page=rute";</script><?php
    }
}

if($_GET['mode']=='edit'){
    $Id_Kecamatan=$_GET['id'];
    $edit=mysql_query("SELECT tb_rute.*, tb_wisata.nama_wisata FROM tb_rute, tb_wisata WHERE tb_rute.Id_Rute=tb_wisata.Id_Rute");
    $data=mysql_fetch_array($edit);
    $nama_wisata=$data['nama_wisata'];
    $Pilih_Kota=$data['Pilih_Kota'];
    $Rute_Angkot=$data['Rute_Angkot'];
    
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data 
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
                                if($_GET['mode']=='edit'){
                                    ?><form action="?page=rute_edit&mode=update" method="post" enctype="multipart/form-data"><?php 
                                }
                                else{
                                    ?><form action="?page=rute_edit&mode=input" method="post" enctype="multipart/form-data">
                                
                                <?php
                                }
                                ?>
                                <div align="right">
                                
                                <a href="?page=rute" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>    
                                </div>
                            <hr />        
                                </div> 
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Wisata</label>
                                    <input type="text" class="form-control input-sm" name="nama_wisata" maxlength="30" value="<?php echo $nama_wisata; ?>">
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
                   
                                
                               
                                <input type="hidden" name="Id_Rute" value="<?php echo $Id_Rute;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=rute" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>