<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

date_default_timezone_set('Asia/Kuala_lumpur');
//$tgl_posting  = date("Y-m-d H:i:s");

if($_GET['mode']=='input'){
    $Nama_Kecamatan = $_POST['Nama_Kecamatan'];

    

    $query=mysql_query("insert into tb_kecamatan(Nama_Kecamatan) 
                                                values( '$Nama_Kecamatan')");
    
    
    if($query){
        ?><script language="javascript">document.location.href="?page=kecamatan";</script><?php
    }   
}
if($_GET['mode']=='update'){
    $Id_Kecamatan           = htmlentities($_POST['Id_Kecamatan']);
    $Nama_Kecamatan         = htmlentities($_POST['Nama_Kecamatan']);
   


    
    $query=mysql_query("UPDATE tb_kecamatan SET Nama_Kecamatan='$Nama_Kecamatan' WHERE Id_Kecamatan='$Id_Kecamatan'");
    
    if($query){
        ?><script language="javascript">document.location.href="?page=kecamatan";</script><?php
    }
}

if($_GET['mode']=='edit'){
    $Id_Kecamatan=$_GET['id'];
    $edit=mysql_query("SELECT * FROM tb_kecamatan WHERE Id_Kecamatan='$Id_Kecamatan'");
    $data=mysql_fetch_array($edit);
    $kecamatan=$data['kecamatan'];
    
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Kecamatan
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
                                if($_GET['mode']=='edit'){
                                    ?><form action="?page=kecamatan_edit&mode=update" method="post" enctype="multipart/form-data"><?php 
                                }
                                else{
                                    ?><form action="?page=kecamatan_edit&mode=input" method="post" enctype="multipart/form-data">
                                
                                <?php
                                }
                                ?>
                                <div align="right">
                                
                                <a href="?page=kecamatan" class="btn btn-round btn-info"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>    
                                </div>
                            <hr />        
                                </div> 
                            <div class="col-lg-5" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kecamatan</label>
                                    <input type="text" class="form-control input-sm" name="Nama_Kecamatan" maxlength="30" value="<?php echo $Nama_Kecamatan; ?>">
                                     </div>                        
                                
                               
                                <input type="hidden" name="Id_Kecamatan" value="<?php echo $Id_Kecamatan;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=kecamatan" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>