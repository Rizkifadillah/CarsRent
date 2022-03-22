
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
                            <h3 class="panel-title">Data Type</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Type</th>
                                        <th>Nama Type</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($type as $tp):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tp->kode_type ?></td>
                                        <td><?php echo $tp->nama_type ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/data_type/delete_type/').$tp->id_type ?>" class="btn btn-sm btn-danger"><i class="lnr lnr-trash"></i></a>
                                            <a href="<?php echo base_url('admin/data_type/update_type/').$tp->id_type ?>" class="btn btn-sm btn-success"><i class="lnr lnr-pencil"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                <div class="col-md-6 text-right"><a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary">Tambah Data Type</a></div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

