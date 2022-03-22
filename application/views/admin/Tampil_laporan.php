
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
                    <h3 class="panel-title">Laporan</h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    </div>
                </div>
                <div class="panel-body no-padding table-responsive">

                <form action="<?php echo base_url('admin/laporan') ?>" method="post">
                    <div class="form-group">
                        <label for="">Dari Tanggal</label>   
                        <input type="date" class="form-control" name="dari"> 
                        <?php echo form_error('dari', '<div class="text-small text-danger">','</div>') ?>

                    </div> 

                    <div class="form-group">
                        <label for="">Sampai Tanggal</label>   
                        <input type="date" class="form-control" name="sampai"> 
                        <?php echo form_error('sampai', '<div class="text-small text-danger">','</div>') ?>

                    </div> 

                    <div class="col md-6">
                        <button class="btn btn-info p-3" type="submit"><i class="fa fa-eye"></i> Tampilkan</button>

                    </div>
                </form>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($laporan as $lp):
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $lp->nama ?></td>
                                        <td><?php echo $lp->merk ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($lp->tanggal_rental)) ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($lp->tanggal_kembali)) ?></td>
                                        <td><?php echo number_format($lp->harga,0,',','.') ?></td>
                                        <td><?php echo number_format($lp->denda,0,',','.') ?></td>
                                        <td><?php echo number_format($lp->total_denda,0,',','.') ?></td>
                                        <td>
                                            <?php 
                                                if($lp->tanggal_pengembalian == "0000-00-00"){
                                                    echo "-";
                                                }else{
                                                    echo date('d/m/Y', strtotime($lp->tanggal_pengembalian));
                                                }
                                            ?>
                                        </td>
                                        <td><?php 
                                            if($lp->status_pengembalian == "Belum Kembali"){
                                                echo "<span class='label label-danger'>Sedang Dirental</span>";
                                            }else{
                                                echo "<span class='label label-success'>Stay Pull</span>";
                                            }
                                        ?></td>
                                        <td><?php 
                                            if($lp->status_rental == "Belum Selesai"){
                                                echo "<span class='label label-danger'>Sedang Dirental</span>";
                                            }else{
                                                echo "<span class='label label-success'>Stay Pull</span>";
                                            }
                                        ?></td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                </div>
                
            </div>
            <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-sm btn-success" target="_blank" 
                                href="<?php echo base_url().'admin/laporan/print_laporan/?dari='
                                .set_value('dari').'&sampai='.set_value('sampai') ?>" 
                                class="btn btn-primary">
                                Print
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

