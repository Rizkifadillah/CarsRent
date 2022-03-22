

    <!-- all products area end -->
    <?php echo $this->session->flashdata('pesan') ?>

    <div class="container mt-5">
                <div class="blog-mesonry">
                    <div class="row grid" style="position: relative; height: 2399.59px;">
                    <?php foreach($mobil as $mb) : ?>

                        <div class="col-lg-6 col-md-6 grid-item" style="position: absolute; left: 0%; top: 0px;">
                            <div class="blog-wrapper mb-40">
                                <div class="blog-img">
                                        <img src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" style="width: 100%; height:100%;" alt="">
                                </div>
                                <div class="blog-info-wrapper">
                                    <div class="blog-meta mt-2">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <!-- <span class="badge badge-dark"> -->
                                                        <?php 
                                                            if($mb->status == "0"){
                                                                echo "<span class='badge badge-warning'>Sedang Dirental </span>";
                                                            }else{
                                                                echo "<span class='badge badge-success'>Tersedia </span>";
                                                            }
                                                        ?>
                                                    <!-- </span> -->
                                                </a>
                                            </li>
                                            <li class="text-grey"><strong><?php echo $mb->no_plat ?></strong></li>
                                            <li class="text-grey"><strong><?php echo $mb->warna ?></strong></li>
                                            <li class="text-grey"><strong><?php echo $mb->tahun ?></strong></li>
                                       </ul>
                                    </div>
                                    <!-- <table class="table table-none ">
                                        <thead >
                                            <tr>
                                                <th class="text-left">
                                                    <h4><?php echo $mb->merk ?></h4> 
                                                </th>
                                                <th class="text-right">
                                                    <h4 class="text-warning">Rp. <?php echo number_format($mb->harga,0,',','.') ?> /Hari</h4>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table> -->
                                    <!-- <div class=""> -->
                                        <h4><?php echo $mb->merk ?></h4>
                                        <h4 class="text-warning">Rp. <?php echo number_format($mb->harga,0,',','.') ?> /Hari</h4>
                                    <!-- </div> -->
                                    <table class="table table-striped table-responsive table-bordered">
                                        <thead class="text-center">
                                            <tr>
                                                <th>
                                                    <?php 
                                                        if($mb->ac == "1"){
                                                            echo "<i class='ti-check text-warning'></i>";
                                                        }else{
                                                            echo "<i class='ti-close text-danger'></i>";
                                                        }
                                                    ?> AC
                                                </th>
                                                <th>
                                                    <?php 
                                                        if($mb->supir == "1"){
                                                            echo "<i class='ti-check text-warning'></i>";
                                                        }else{
                                                            echo "<i class='ti-close text-danger'></i>";
                                                        }
                                                    ?> SUPIR
                                                </th> <th>
                                                    <?php 
                                                        if($mb->mp3_player == "1"){
                                                            echo "<i class='ti-check text-warning'></i>";
                                                        }else{
                                                            echo "<i class='ti-close text-danger'></i>";
                                                        }
                                                    ?> MP3
                                                </th>
                                                <th>
                                                    <?php 
                                                        if($mb->central_lock == "1"){
                                                            echo "<i class='ti-check text-warning'></i>";
                                                        }else{
                                                            echo "<i class='ti-close text-danger'></i>";
                                                        }
                                                    ?> CENTRAL LOCK
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <!-- <a class="blog-btn btn-hover" href="#">Read More</a> -->
                                    <?php
                                        if($mb->status == "0"){
                                            echo '
                                            <a class="blog-btn btn-hover btn-danger" href="#">
                                                Sedang Dirental
                                            </a>
                                            ';
                                        }else{
                                            echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil, '
                                            <button class="blog-btn btn-hover btn-success" >
                                                Rental
                                            </button>
                                            ');
                                        }
                                    ?>
                                    <a class="blog-btn btn-hover" href="<?php echo base_url('customer/dashboard/detail_mobil/').$mb->id_mobil ?>">
                                        <!-- <i class="pe-7s-cart"></i> -->
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ; ?>

                    </div>
                </div>
                <div class="pagination-style mt-20 text-center">
                    <ul>
                        <li><a href="#"><i class="ti-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">19</a></li>
                        <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
    <!-- insta feed start -->
    <div class="insta-feed ptb-120  gray-bg">
        <div class="pl-185 pr-185">
            <div class="section-title-2 text-center mb-50">
                <h2>Insta Feed</h2>
                <h4>Follow us on intagram. <span>@Ezonepro</span></h4>
            </div>
            <div class="instafeed-wrapper">
                <div class="instafeed-active owl-carousel">
                    <div class="instafeed-img">
                        <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/instra/1.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/instra/2.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/instra/3.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/instra/4.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/instra/5.jpg" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/instra/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- insta feed end -->