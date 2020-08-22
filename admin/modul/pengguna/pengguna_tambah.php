<?php
include "././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";
include "././css/auto_number.php";

date_default_timezone_set('Asia/Kuala_lumpur');
$tgl_posting  = date("Y-m-d H:i:s");

if($_GET['mode']=='input'){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $Nama_Staff = $_POST['Nama_Staff'];




if(isset($_POST['submit'])){
    if($username == "" && $password =="" && $Nama_Staff =="") {
        echo '<script type="text/javascript">
            alert("Anda harus mengisi data dengan lengkap"); </script>';
    }
    elseif(empty($username)){    //jika nama kosong maka muncul pesan
        echo '<script type="text/javascript">
            alert("Harap Masukkan Nama Username...!!!"); </script>';
    }
    elseif(empty($password)){    //jika nama kosong maka muncul pesan
        echo '<script type="text/javascript">
            alert("Harap Masukkan Password...!!!"); </script>';
    }
    elseif(empty($Nama_Staff)){    //jika nama kosong maka muncul pesan
        echo '<script type="text/javascript">
            alert("Harap Masukkan Nama Anda...!!!"); </script>';
    }
   
    else{

        $query=mysql_query("insert into tb_staff(username,password,Nama_Staff) 
                                                values( '$username',
                                                        '$password',
                                                        '$Nama_Staff')");
        echo '<script type="text/javascript">
            alert("Data Berhasil Disimpan"); </script>';
    }
}
    
    if($query){
        ?><script language="javascript">document.location.href="?page=pengguna";</script><?php
    }

    
}
?>
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Staff
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <?php
                                if($_GET['mode']=='edit'){
                                    ?><form action="?page=pengguna_tambah&mode=update" method="post" enctype="multipart/form-data"><?php 
                                }
                                else{
                                    ?><form action="?page=pengguna_tambah&mode=input" method="post" enctype="multipart/form-data">
                                
                                <?php
                                }
                                ?>


                                </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <div align="right">
                    <a href="?page=pengguna" type="button" class="btn btn-round btn-default"><i class="fa fa-eye fa-fw"></i>Lihat Data</a>
                    </div>
               
                    <hr />
                                
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control input-sm" name="username" maxlength="100" value="<?php echo $username; ?>">
                                

                                </div>    
                            <div class="form-group" > 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" class="form-control input-sm" name="password" maxlength="30" value="<?php echo $password; ?>">
                                

                            
                                </div>
                        <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Staff</label>
                                    <input type="text" class="form-control input-sm" name="Nama_Staff" value="<?php echo $Nama_Staff; ?>">
                                </div>  

                               
                                
                               
                                <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                <button type="submit" name="submit" class="btn btn-round btn-success"><i class="fa fa-save fa-fw"></i>Simpan</button>
                                <a href="?page=pengguna" class="btn btn-round btn-round btn-default"><i class="fa fa-undo fa-fw"></i>Batal</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>