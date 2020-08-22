<?php
include"././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";

		$id=$_GET['id'];
		
		$rumah_makan=mysql_fetch_array(mysql_query("select * from tb_rmmakan where id_rumah_makan='$id'"));
		
		$tgl=tgl_indo($rumah_makan['tgl_lahir']);
?>


        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-9">
                           <div class="profile-desk">
                               <h1><?php echo $rumah_makan['nama_rumah_makan'];?></h1>
                               <br />
                               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                   <td valign="top"><strong>ID Rumah Makan</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $rumah_makan['id_rumah_makan']; ?></span></td>
                                 </tr>
								 
								<tr>
                                   <td width="20%" valign="top"><strong>Alamat</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $rumah_makan['alamat']; ?></span></td>
                                 </tr>
                                
								<tr>
                                   <td width="20%" valign="top"><strong>Keterangan</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $rumah_makan['keterangan']; ?></span></td>
                                 </tr>
								 
							<tr>
                                   <td width="20%" valign="top"><strong>Harga</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $rumah_makan['harga']; ?></span></td>
                                 </tr>
							
                                 <tr>
                                   <td valign="top"><strong>Latitude</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $rumah_makan['latitude']; ?></span></td>
                                 </tr>
                                 <tr>
                                   <td valign="top"><strong>Longitude</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $rumah_makan['langitude']; ?></span></td>
                                 </tr>
								 <tr>
                                </tr> 
								
                               </table>
							   <tr>
									<td valign="top"><img src="././images/<?php echo $rumah_makan['image']; ?>" height="100" width="140"></td>
									
                                 </tr>
                               <p><br>
                         </div>
                       </div>
                       
                       
                    </div>
                </section>
            </div>
            
        </div>
        <button type="button" class="btn btn-round btn-default" onclick="self.history.back()"><i class="fa fa-angle-double-left fa-fw"></i>Kembali</button>