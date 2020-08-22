<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Wisatawan
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                    <div class="adv-table">
                    <div align="right">
                
   					<hr />
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>Id Wisatawan</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <!-- <th>Jenis Kelamin</th> -->
                        <th>Alamat</th>
                        <th>No Hp</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
					include "././koneksi.php";
									
					$sql=mysql_query("select * from tb_wisatawan");
					while($data=mysql_fetch_array($sql)){					
					?>
                    
                    <tr class="gradeU">
                        <td><?php echo $data['Id_Wisatawan']; ?></td>
                        <td><?php echo $data['Username']; ?></td>
                        <td><?php echo $data['Email']; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <!-- <td><?php echo $data['Jenis_Kelamin']; ?></td> -->
                        <td><?php echo $data['Alamat']; ?></td>
                        <td><?php echo $data['No_Hp']; ?></td>
						
                        <td>
						
						
                        
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