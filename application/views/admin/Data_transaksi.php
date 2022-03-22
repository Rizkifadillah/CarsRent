
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
                        <div class="panel-body no-padding table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Customer</th>
                                        <th>Mobil</th>
                                        <th>Tgl. Rental</th>
                                        <th>Tgl. Kembali</th>
                                        <th>Harga/Hari</th>
                                        <th>Denda/Hari</th>
                                        <th>Total Denda</th>
                                        <th>Tgl. Dikembalikan</th>
                                        <th>Status Pengembalian</th>
                                        <th>Status Rental</th>
                                        <th>Cek Pembayaran</th>
                                        <th>Aksi Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($transaksi as $tr):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tr->nama ?></td>
                                        <td><?php echo $tr->merk ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                                        <td><?php echo number_format($tr->harga,0,',','.') ?></td>
                                        <td><?php echo number_format($tr->denda,0,',','.') ?></td>
                                        <td><?php echo number_format($tr->total_denda,0,',','.') ?></td>
                                        <td>
                                            <?php 
                                                if($tr->tanggal_pengembalian == "0000-00-00"){
                                                    echo "-";
                                                }else{
                                                    echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                                                }
                                            ?>
                                        </td>
                                        <td><?php 
                                            if($tr->status_pengembalian == "Belum Kembali"){
                                                echo "<span class='label label-danger'>Sedang Dirental</span>";
                                            }else{
                                                echo "<span class='label label-success'>Stay Pull</span>";
                                            }
                                        ?></td>
                                        <td><?php 
                                            if($tr->status_rental == "Belum Selesai"){
                                                echo "<span class='label label-danger'>Sedang Dirental</span>";
                                            }else{
                                                echo "<span class='label label-success'>Stay Pull</span>";
                                            }
                                        ?></td>
                                        <td>
                                            <center>
                                                <?php
                                                    if(empty($tr->bukti_pembayaran)){ ?>
                                                    <button class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i></button>    
                                                <?php }else{ ?>
                                                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_rental) ?> "><i class="fa fa-check"></i></a>
                                                <?php } ?>
                                            </center>
                                        </td>
                                        <td>
                                            <?php
                                                if($tr->status == "1"){
                                                    echo "-";
                                                }else{ ?>

                                                    <!-- <div class="row"> -->
                                                        <a href="<?php echo base_url('admin/transaksi/transaksi_selesai/').$tr->id_rental ?>" class="btn btn-sm btn-danger ml-2"><i class="fa fa-check"></i></a>
                                                        <a href="<?php echo base_url('admin/transaksi/batal_transaksi/').$tr->id_rental ?>" class="btn btn-sm btn-success"><i class="fa fa-times"></i></a>
                                                    <!-- </div> -->
                                            <?php
                                                }
                                            ?>
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

