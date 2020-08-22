

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Rute 
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <div align="right">
                    <a href="?page=rute_tambah" type="button" class="btn btn-round btn-default"><i class="fa fa-angle-double-left fa-fw"></i>Tambah Data</a>
                    </div>
               
   					<hr />
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                       <th>ID</th>
                        <th>Nama Wisata</th>
                        <th>Dari Kota</th>
                        <th>Rute Angkutan Umum</th>
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
					include "././koneksi.php";
					

					$sql=mysql_query("SELECT tb_rute.*, tb_wisata.nama_wisata FROM tb_rute, tb_wisata WHERE tb_rute.Id_Rute=tb_wisata.Id_Rute");
					while($data=mysql_fetch_array($sql)){					
					?>
                    
                    <tr class="gradeU">
                        <td><?php echo $data['Id_Rute']; ?></td>
                        <td><?php echo $data['nama_wisata']; ?></td>
                        <td><?php echo $data['Pilih_Kota']; ?></td>
                        <td><?php echo $data['Rute_Angkot']; ?></td>
                        
						
                        <td>
                        <a href="?page=rute_edit&mode=edit&id=<?php echo $data['Id_Rute'];?>" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Edit</a>
						<a class="btn btn-warning" data-toggle="modal"  href="?page=rute_hapus&id=<?php echo $data['Id_Rute'];?>"  class="fa fa-ban fa-fw" onClick="return confirm ('Apakah anda yakin untuk menghapus data ini')">Hapus</a>
						
                        

                        
                                        </div>
                                    </div>
                                </div>
                            </div>
							
						
						</td>
                    </tr>
                    <?php
					}
					?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                </section>
            </div>
        </div>