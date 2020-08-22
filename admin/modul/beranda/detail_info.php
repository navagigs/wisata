<?php
include"././koneksi.php";
include "././css/fungsi_indotgl.php";
include "././css/library.php";

		$id=$_GET['id'];
		
		$info=mysql_fetch_array(mysql_query("select * from tb_info where id_info='$id'"));
		
		$tgl=tgl_indo($info['tgl_posting']);
?>


        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-9">
                           <div class="profile-desk">
                               <h1><?php echo $info['judul'];?></h1>
                               <br />
                               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                              
							
                                 <tr>
                                   <td valign="top"><strong>Tanggal Posting</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $info['tgl_posting']; ?></span></td>
                                 </tr>
                                 <tr>

                                   <td width="20%" valign="top"><strong>Penulis</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $info['penulis']; ?></span></td>
                                 </tr>
                                 <tr>

                                   <td width="20%" valign="top"><strong>Kategori</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $info['kategori']; ?></span></td>
                                 </tr>
                                 <tr>

                                   <td width="20%" valign="top"><strong>Deskripsi</strong></td>
                                   <td width="2%" valign="top"><div align="center">:</div></td>
                                   <td width="78%" valign="top"><span class="text-muted"><?php echo $info['deskripsi']; ?></span></td>
                                 </tr>
                                 <tr>
                                   <td valign="top"><strong>Gambar</strong></td>
                                   <td valign="top"><div align="center">:</div></td>
                                   <td valign="top"><span class="text-muted"><?php echo $info['image']; ?></span></td>
                                 </tr>
								 <tr>
                                </tr> 
								
                               </table>
							   <tr>
									<td valign="top"><img src="././images/<?php echo $info['image']; ?>" height="300" width="auto"></td>
						
                                 </tr>
                               <p><br>
                         </div>
                       </div>
                       
                       
                    </div>
                </section>
            </div>
            
        </div>
        <button type="button" class="btn btn-round btn-default" onclick="self.history.back()"><i class="fa fa-angle-double-left fa-fw"></i>Kembali</button>