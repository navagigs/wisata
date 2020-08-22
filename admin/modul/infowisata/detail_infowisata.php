<?php
include"././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";

		$id=$_GET['id'];
		
		$infowisata=mysql_fetch_array(mysql_query("select * from tb_infowisata where Id_Wisata='$id'"));
		
		//$tgl=tgl_indo($wisata['tgl_lahir']);
?>


        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-9">
                           <div class="profile-desk">
                               <h1><?php echo $infowisata['wisata'];?></h1>
                               <br />
                               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                                   <td valign="top"><strong>           </strong></td>
                                   <td valign="top"><div align="center"></div></td>
                                   <td valign="top"><img src="././images/<?php echo $infowisata['image']; ?>" height="300" width="auto"></td>
                                 </tr>
								 
								<tr>
                                   <td width="20%" valign="top"><strong>Alamat</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $infowisata['Alamat']; ?></span></td>
                                 </tr>
                                  <tr>
                                   <td valign="top"><strong>Latitude</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $infowisata['latitude']; ?></span></td>
                                 </tr>
                                 <tr>
                                   <td valign="top"><strong>Longitude</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $infowisata['longitude']; ?></span></td>
                                 </tr>

                <tr>
                                   <td width="20%" valign="top"><strong>Deskripsi</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $infowisata['Deskripsi']; ?></span></td>
                                 </tr>
              
              <tr>
                                   <td width="20%" valign="top"><strong>Rute Angkutan Umum</strong></td>
                                 </tr>

              <tr>
                                  
                                   <td width="20%" valign="top"><strong>Dari Bandung</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $infowisata['bdg']; ?></span></td>
                                 </tr>

              <tr>
                                   <td width="20%" valign="top"><strong>Dari Bogor</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $infowisata['bogor']; ?></span></td>
                                 </tr>
              <tr>
                                   <td width="20%" valign="top"><strong>Dari Sukabumi</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $infowisata['sukabumi']; ?></span></td>
                                 </tr>
              
              <tr>
                                  
                                   <td width="20%" valign="top"><strong>Nama Penginapan</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $infowisata['Nama_Penginapan']; ?></span></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Foto Penginapan</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $infowisata['image2']; ?>" height="300" width="auto"></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Nama Kuliner</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $infowisata['Nama_Kuliner']; ?></span></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Foto Kuliner</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $infowisata['image3']; ?>" height="300" width="auto"></td>
                                 </tr>

               <tr>
                                   <td valign="top"><strong>Nama Budaya</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $infowisata['Nama_Budaya']; ?></span></td>
                                 </tr>

              <tr>
                                   <td valign="top"><strong>Foto Budaya</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><img src="././images/<?php echo $infowisata['image4']; ?>" height="300" width="auto"></td>
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