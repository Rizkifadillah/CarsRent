
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
                        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert"> -->
                            <?php echo $this->session->flashdata('pesan') ?>
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> -->
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Purchases</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Type</th>
                                        <th>Merk</th>
                                        <th>No. Plat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($mobil as $mb):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td>
                                            <img width="60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>"  >
                                        </td>
                                        <td><?php echo $mb->kode_type ?></td>
                                        <td><?php echo $mb->merk ?></td>
                                        <td><?php echo $mb->no_plat ?></td>
                                        <td><?php 
                                            if($mb->status == "0"){
                                                echo "<span class='label label-danger'>Tidak Tersedia</span>";
                                            }else{
                                                echo "<span class='label label-success'> Tersedia</span>";
                                            }
                                        ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="lnr lnr-trash"></i></a>
                                            <a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="lnr lnr-pencil"></i></a>
                                            <a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?>" class="btn btn-sm btn-info"><i class="lnr lnr-eye"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                <div class="col-md-6 text-right"><a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary">Tambah Data Mobil</a></div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

