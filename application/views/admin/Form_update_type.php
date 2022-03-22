
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Form Updaet Type Mobil</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="panel-body">
                            <?php foreach($type as $tp) :?>

                                <form action="<?php echo base_url('admin/data_type/update_type_aksi') ?>" method="post" >
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Kode Type</label>   
                                            <input type="hidden" name="id_type" value="<?php echo $tp->id_type ?>">
                                            <input type="text" class="form-control" value="<?php echo $tp->kode_type ?>" name="kode_type"> 
                                            <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        
                                    </div>

                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Nama Type</label>   
                                            <input type="text" class="form-control" value="<?php echo $tp->nama_type ?>" name="nama_type"> 
                                            <?php echo form_error('nama_type', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group" >
                                            <button type="submit" class="btn btn-primary ">Submit</button>
                                            <button type="reset" class="btn btn-danger ">Reset</button>
                                        </div>
                                    </div>
    
                                </div>
                                </form>
                            <?php endforeach ; ?>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

