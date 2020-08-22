<?php
include"././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";

		$id=$_GET['id'];
		
		$wisata=mysql_fetch_array(mysql_query("select * from tb_wisata where id_wisata='$id'"));
		
		//$tgl=tgl_indo($wisata['tgl_lahir']);
?>


        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-9">
                           <div class="profile-desk">
                               <h1><?php echo $wisata['nama_wisata'];?></h1>
                               <br />
                               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                                   <td valign="top"><strong>ID Wisata</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $wisata['id_wisata']; ?></span></td>
                                 </tr>

                <tr>
                                   <td valign="top"><strong>Foto Wisata</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $wisata['image']; ?>" height="300" width="auto"></td>
                                 </tr>

                <tr>
                                   <td width="20%" valign="top"><strong>Kecamatan</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $wisata['Nama_Kecamatan']; ?></span></td>
                                 </tr>
								 
								<tr>
                                   <td width="20%" valign="top"><strong>Alamat</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $wisata['alamat']; ?></span></td>
                                 </tr>

                <tr>
                                   <td width="20%" valign="top"><strong>Deskripsi</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $wisata['Deskripsi']; ?></span></td>
                                 </tr>
              
                <tr>
                                   <td width="20%" valign="top"><strong>Kota</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $wisata['Pilih_Kota']; ?></span></td>
                                 </tr>
                 
              <tr>
                                   <td width="20%" valign="top"><strong>Rute Angkot</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $wisata['Rute_Angkot']; ?></span></td>
                                 </tr>
              
              <tr>
                                  
                                   <td width="20%" valign="top"><strong>Nama Penginapan</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $wisata['Nama_Penginapan']; ?></span></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Foto Penginapan</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $wisata['image2']; ?>" height="300" width="auto"></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Nama Kuliner</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $wisata['Nama_Kuliner']; ?></span></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Foto Kuliner</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $wisata['image3']; ?>" height="300" width="auto"></td>
                                 </tr>

               <tr>
                                   <td valign="top"><strong>Nama Budaya</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $wisata['Nama_Budaya']; ?></span></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Foto Budaya</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $wisata['image4']; ?>" height="300" width="auto"></td>
                                 </tr>



								 <tr>
                                </tr> 
								
                               </table>
                               <p><br>
                         </div>
                       </div>
                       
                       
                    </div>
                </section>
            </div>
            
        </div>
        <button type="button" class="btn btn-round btn-default" onclick="self.history.back()"><i class="fa fa-angle-double-left fa-fw"></i>Kembali</button>