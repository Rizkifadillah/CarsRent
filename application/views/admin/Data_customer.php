
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
                            <h3 class="panel-title">Data Customer</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <table class="table table-striped table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Alamat</th>
                                        <th>Gender</th>
                                        <th>No. Telpon</th>
                                        <th>No. KTP</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($customer as $cs):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $cs->nama ?></td>
                                        <td><?php echo $cs->username ?></td>
                                        <td><?php echo $cs->alamat ?></td>
                                        <td><?php echo $cs->gender ?></td>
                                        <td><?php echo $cs->no_telpon ?></td>
                                        <td><?php echo $cs->no_ktp ?></td>
                                        <td><?php echo $cs->password ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer ?>" class="btn btn-sm btn-danger"><i class="lnr lnr-trash"></i></a>
                                            <a href="<?php echo base_url('admin/data_customer/update_customer/').$cs->id_customer ?>" class="btn btn-sm btn-success"><i class="lnr lnr-pencil"></i></a>
                                            <!-- <a href="<?php echo base_url('admin/data_customer/detail_customer/').$cs->id_customer ?>" class="btn btn-sm btn-info"><i class="lnr lnr-eye"></i></a> -->
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                <div class="col-md-6 text-right"><a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary">Tambah Data customer</a></div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

