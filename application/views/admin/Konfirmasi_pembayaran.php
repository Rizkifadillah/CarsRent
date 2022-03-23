		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline col-md-8">
                        <div class="panel-heading">
                            <h3 class="panel-title">Konfirmasi Pembayaran</h3>
                        </div>

                        <center class="card" >
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>" method="post">
                                    <?php foreach($pembayaran as $pmb) : ?>
                                        <a href="<?php echo base_url('admin/transaksi/download_pembayaran/'.$pmb->id_rental) ?>" class="btn btn-sm btn-success">
                                            <i class="fa fa-download"></i>
                                            Download Bukti Pembayaran
                                        </a>
                                        <div class="custom-control custom-switch">
                                            <input type="hidden" class="custom-control-input" value="<?php echo $pmb->id_rental ?>" name="id_rental">
                                            <input type="checkbox" id="customSwitch1" class="custom-control-input" value="1" name="status_pembayaran">
                                            <label for="customSwitch1" class="custom-control-label">
                                                Konfirmasi Pembayaran
                                            </label>
                                        </div>
                                        <hr>
                                        <button class="btn btn-sm btn-primary mb-2">Simpan</button>
                                    <?php endforeach ; ?>
                                </form>
                            </div>
                        </center>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->


        