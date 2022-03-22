		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail Mobil</h3>
                        </div>
                        <?php foreach($detail as $dt) : ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img width="100%" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <table class="table table-hover">
                                                <tr>
                                                    <td>Type Mobil </td>
                                                    <td>
                                                        <?php
                                                            if ($dt->kode_type == "SDN") {
                                                                echo "Sedan";
                                                            }elseif($dt->kode_type == "SDN") {
                                                                echo "Sedan";
                                                            }elseif($dt->kode_type == "SDN") {
                                                                echo "Sedan";
                                                            }else{
                                                                echo "<span class='text-danger>Type mobil belum terdaftar</span>";
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>No. Plat</td>
                                                    <td><?php echo $dt->no_plat ?></td>
                                                </tr>

                                                <tr>
                                                    <td>Warna</td>
                                                    <td><?php echo $dt->warna ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td><?php echo $dt->tahun ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Harga Sewa / Hari</td>
                                                    <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?> / Hari</td>
                                                </tr>
                                                 <tr>
                                                    <td>Denda</td>
                                                    <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?> / Hari</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>
                                                        <?php 
                                                            if($dt->status == "0"){
                                                                echo "<span class='label label-danger'>Tidak Tersedia</span>";
                                                            }else{
                                                                echo "<span class='label label-success'> Tersedia</span>";
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Supir</td>
                                                    <td>
                                                        <?php 
                                                            if($dt->supir == "0"){
                                                                echo "<span class='label label-danger'>Tidak Tersedia</span>";
                                                            }else{
                                                                echo "<span class='label label-success'> Tersedia</span>";
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>AC</td>
                                                    <td>
                                                        <?php 
                                                            if($dt->ac == "0"){
                                                                echo "<span class='label label-danger'>Tidak Tersedia</span>";
                                                            }else{
                                                                echo "<span class='label label-success'> Tersedia</span>";
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>MP3 Player</td>
                                                    <td>
                                                        <?php 
                                                            if($dt->mp3_player == "0"){
                                                                echo "<span class='label label-danger'>Tidak Tersedia</span>";
                                                            }else{
                                                                echo "<span class='label label-success'> Tersedia</span>";
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Central Lock</td>
                                                    <td>
                                                        <?php 
                                                            if($dt->central_lock == "0"){
                                                                echo "<span class='label label-danger'>Tidak Tersedia</span>";
                                                            }else{
                                                                echo "<span class='label label-success'> Tersedia</span>";
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>
                                            </table>

                                            <a href="<?php echo base_url('admin/data_mobil/')?>" class="btn btn-sm btn-info">Kembali</a>
                                            <a href="<?php echo base_url('admin/data_mobil/update_mobil/').$dt->id_mobil ?>" class="btn btn-sm btn-success">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ; ?>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

