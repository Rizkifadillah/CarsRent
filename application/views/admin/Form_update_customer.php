
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Form Tambah Data Customer</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="panel-body">
                                <?php foreach($customer as $cs) : ?>
                                <form action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>" method="post" >
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Nama</label>   
                                            <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">   
                                            <input type="text" class="form-control" value="<?php echo $cs->nama ?>" name="nama"> 
                                            <?php echo form_error('nama', '<div class="text-small text-danger">','</div>') ?>

                                        </div>

                                        <div class="form-group">
                                            <label for="">username</label>   
                                            <input type="text" class="form-control" value="<?php echo $cs->username ?>" name="username"> 
                                            <?php echo form_error('username', '<div class="text-small text-danger">','</div>') ?>

                                        </div>

                                        <div class="form-group">
                                            <label for="">alamat</label>   
                                            <input type="text" class="form-control" value="<?php echo $cs->alamat ?>" name="alamat"> 
                                            <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>') ?>

                                        </div>                                   
                                                                            
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="">Gender</label>   
                                            <select  name="gender" class="form-control">
                                                <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                            <?php echo form_error('gender', '<div class="text-small text-danger">','</div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="">No Telpon</label>   
                                            <input type="text" class="form-control" value="<?php echo $cs->no_telpon ?>" name="no_telpon"> 
                                            <?php echo form_error('no_telpon', '<div class="text-small text-danger">','</div>') ?>

                                        </div>

                                        <div class="form-group">
                                            <label for="">No. KTP</label>   
                                            <input type="text" class="form-control" value="<?php echo $cs->no_ktp ?>" name="no_ktp"> 
                                            <?php echo form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Password</label>   
                                            <input type="password" class="form-control" value="<?php echo $cs->password ?>" name="password"> 
                                            <?php echo form_error('password', '<div class="text-small text-danger">','</div>') ?>

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

