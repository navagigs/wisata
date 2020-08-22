

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Wisata
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <div align="right">
                    <a href="?page=wisata_tambah" type="button" class="btn btn-round btn-default"><i class="fa fa-angle-double-left fa-fw"></i>Tambah Data</a>
                    </div>
               
   					<hr />
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>ID Wisata</th>
                        <th>Nama Wisata</th>
                        <th>Kecamatan</th>
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
					include "././koneksi.php";
									
					$sql=mysql_query("select * from tb_wisata");
					while($data=mysql_fetch_array($sql)){					
					?>
                    
                    <tr class="gradeU">
                        <td><?php echo $data['id_wisata']; ?></td>
                        <td><?php echo $data['nama_wisata']; ?></td>
                        <td><?php echo $data['Nama_Kecamatan']; ?></td>
						
                        <td>
                        <a href="?page=detail_wisata&id=<?php echo $data['id_wisata'];?>" class="btn btn-success"><i class="fa fa-eye fa-fw"></i>Detail</a> 
                        <a href="?page=wisata_edit&mode=edit&id=<?php echo $data['id_wisata'];?>" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Edit</a>
						<a class="btn btn-warning" data-toggle="modal" href="?page=wisata_hapus&id=<?php echo $data['id_wisata'];?>" onClick="return confirm ('Apakah anda yakin untuk menghapus data ini')">Hapus</a>
						
						
                        
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