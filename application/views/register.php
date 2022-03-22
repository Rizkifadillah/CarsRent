<div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <h2>Register</h2>

                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                <?php echo $this->session->flashdata('pesan') ?>

                                    <form action="<?php echo base_url('register') ?>" method="post">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>   
                                            <input type="text" name="nama" placeholder="Nama">
                                            <?php echo form_error('nama', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>   
                                            <input type="text" name="username" placeholder="Username">
                                            <?php echo form_error('username', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>   
                                            <input type="text" name="alamat" placeholder="Alamat">
                                            <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Gender</label>   
                                            <select name="gender" class="form-control">
                                                <option value="">--Pilih Gender--</option>
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                            <?php echo form_error('gender', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telpon">No. Telpon</label>   
                                            <input type="text" name="no_telpon" placeholder="No. Telpon">
                                            <?php echo form_error('no_telpon', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_ktp">No. KTP</label>   
                                            <input type="text" name="no_ktp" placeholder="No. KTP">
                                            <?php echo form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>   
                                            <input type="password" name="password" placeholder="Password">
                                            <?php echo form_error('password', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="button-box">
                                            <button type="submit" class="default-btn floatright">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>