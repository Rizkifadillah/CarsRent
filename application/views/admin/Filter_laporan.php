
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

