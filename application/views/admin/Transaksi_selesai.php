.
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
                            <h3 class="panel-title">Transaksi Selesai</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding table-responsive">
                            <?php foreach($transaksi as $tr) : ?>
                                <form action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi')?>" method="post">
                                    <input type="hidden" name="id_rental" value="<?php echo $tr->id_rental ?>">
                                    <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
                                    <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">

                                    <div class="form-group">
                                        <label for="">Tanggal Pengembalian</label>
                                        <input type="date" name="tanggal_pengembalian" value="<?php echo $tr->tanggal_pengembalian ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status Pengembalian</label>
                                        <select name="status_pengembalian" class="form-control" id="">
                                            <option value="<?php echo $tr->status_pengembalian ?>"><?php echo $tr->status_pengembalian ?></option>
                                            <option value="Kembali">Kembali</option>
                                            <option value="Belum Kembali">Belum Kembali</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status Rental</label>
                                        <select name="status_rental" class="form-control" id="">
                                            <option value="<?php echo $tr->status_rental ?>"><?php echo $tr->status_rental ?></option>
                                            <option value="Selesai">Selesai</option>
                                            <option value="Belum Selesai">Belum Selesai</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-success">Save</button>
                                </form>
                            <?php endforeach ; ?>
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

