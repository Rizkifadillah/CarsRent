<div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                        <!-- <div class="row"> -->
                            <h2>Ganti Password</h2>
                        <!-- </div> -->
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                <?php echo $this->session->flashdata('pesan') ?>

                                    <form action="<?php echo base_url('auth/ganti_password_aksi') ?>" method="POST">
                                        <div class="form-group">
                                            <input type="hidden" name="id_customer">
                                            <input type="password" name="pass_baru" placeholder="Password Baru" autofocus>
                                            <?php echo form_error('pass_baru', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="ulang_pass" placeholder="Ulang Password">
                                            <?php echo form_error('ulang_pass', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="button-box">
                                           
                                            <button type="submit" class="default-btn floatright">Ganti Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>