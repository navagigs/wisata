

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Staff Pengelola
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <div align="right">
                    <a href="?page=pengguna_tambah" type="button" class="btn btn-round btn-default"><i class="fa fa-angle-double-left fa-fw"></i>Tambah Data</a>
                    </div>
               
   					<hr />
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                       <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        
                        <th>Kelola</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
					include "././koneksi.php";
									
					$sql=mysql_query("select * from tb_staff");
					while($data=mysql_fetch_array($sql)){					
					?>
                    
                    <tr class="gradeU">
                        <td><?php echo $data['user_id']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['Nama_Staff']; ?></td>
                        
						
                        <td>
                        
                        <a href="?page=pengguna_edit&mode=edit&id=<?php echo $data['user_id'];?>" class="btn btn-success"><i class="fa fa-edit fa-fw"></i>Edit</a>
						<a class="btn btn-warning" data-toggle="modal"  href="?page=pengguna_hapus&id=<?php echo $data['user_id'];?>"  class="fa fa-ban fa-fw" onClick="return confirm ('Apakah anda yakin untuk menghapus data ini')">Hapus</a>
						
						
                        
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