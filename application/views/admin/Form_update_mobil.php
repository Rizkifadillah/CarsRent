
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Purchases</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="panel-body">
                                <?php foreach($mobil as $mb) :?>
                                <form action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Type Mobil</label> 
                                            <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">   
                                            <select name="kode_type" class="form-control">
                                                <option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
                                                <?php foreach($type as $tp) : ?>
                                                    <option value="<?php echo $tp->kode_type ?>"> <?php echo $tp->nama_type ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="">Merk Mobil</label>   
                                            <input type="text" class="form-control" value="<?php echo $mb->merk ?>" name="merk"> 
                                            <?php echo form_error('merk', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="">No. Plat</label>   
                                            <input type="text" class="form-control" value="<?php echo $mb->no_plat ?>" name="no_plat"> 
                                            <?php echo form_error('no_plat', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="">Warna Mobil</label>   
                                            <input type="text" class="form-control" value="<?php echo $mb->warna ?>" name="warna"> 
                                            <?php echo form_error('warna', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="">Tahun</label>   
                                            <input type="text" class="form-control" value="<?php echo $mb->tahun ?>" name="tahun"> 
                                            <?php echo form_error('tahun', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Sewa / Hari</label>   
                                            <input type="number" class="form-control" value="<?php echo $mb->harga ?>" name="harga"> 
                                            <?php echo form_error('harga', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="">Denda</label>   
                                            <input type="number" class="form-control" value="<?php echo $mb->denda ?>" name="denda"> 
                                            <?php echo form_error('denda', '<div class="text-small text-danger">','</div>') ?>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        
                                        
                                        <div class="form-group">
                                            <label for="">Status Kendaraan</label>   
                                            <select name="status" class="form-control">
                                                <option <?php if($mb->status == "1"){echo "selected='selected'";} ?> value="1">Tersedia</option>
                                                <option <?php if($mb->status == "0"){echo "selected='selected'";} ?> value="0">Tidak Tersedia</option>
                                            </select>
                                            <?php echo form_error('status', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">AC</label>   
                                            <select name="ac" class="form-control">
                                                <option <?php if($mb->ac == "1"){echo "selected='selected'";} ?> value="1">Tersedia</option>
                                                <option <?php if($mb->ac == "0"){echo "selected='selected'";} ?> value="0">Tidak Tersedia</option>
                                            </select>
                                            <?php echo form_error('ac', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supir</label>   
                                            <select name="supir" class="form-control">
                                                <option <?php if($mb->supir == "1"){echo "selected='selected'";} ?> value="1">Tersedia</option>
                                                <option <?php if($mb->supir == "0"){echo "selected='selected'";} ?> value="0">Tidak Tersedia</option>
                                            </select>
                                            <?php echo form_error('supir', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">MP3 Player</label>   
                                            <select name="mp3_player" class="form-control">
                                                <option <?php if($mb->mp3_player == "1"){echo "selected='selected'";} ?> value="1">Tersedia</option>
                                                <option <?php if($mb->mp3_player == "0"){echo "selected='selected'";} ?> value="0">Tidak Tersedia</option>
                                            </select>
                                            <?php echo form_error('mp3_player', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Central Lock</label>   
                                            <select name="central_lock" class="form-control">
                                                <option <?php if($mb->central_lock == "1"){echo "selected='selected'";} ?> value="1">Tersedia</option>
                                                <option <?php if($mb->central_lock == "0"){echo "selected='selected'";} ?> value="0">Tidak Tersedia</option>
                                            </select>
                                            <?php echo form_error('central_lock', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gambar</label>   
                                            <input type="file" name="gambar" class="form-control" value="<?php echo $mb->gambar ?>" > 
                                        </div>
                                        <div class="form-group" >

                                            <button type="submit" class="btn btn-primary ">Submit</button>
                                            <button type="reset" class="btn btn-danger ">Reset</button>
                                        </div>
                                    </div>
    
                                </div>
                                </form>
                                <?php endforeach; ?>
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

