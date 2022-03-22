<div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <h2>Login</h2>

                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                <?php echo $this->session->flashdata('pesan') ?>

                                    <form action="<?php echo base_url('auth/login') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Username" autofocus>
                                            <?php echo form_error('username', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password">
                                            <?php echo form_error('password', '<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <!-- <input type="checkbox"> -->
                                                <p class=" floatright">Don't have an account?</p>
                                                <a href="<?php echo base_url('register') ?>" class="default-btn floatright">Create Account</a>
                                            </div>
                                            <button type="submit" class="default-btn floatright">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>