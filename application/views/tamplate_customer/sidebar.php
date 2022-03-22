
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <header>
        <div class="header-area">
            <div class="header-left-sidebar">
                <div class="logo">
                    <a href="<?php echo base_url('customer/dashboard') ?>">
                    <h1><strong>RentApp</strong></h1>
                    </a>
                    <!-- <a href="index.html"><img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/logo/logo.png" alt=""></a> -->
                </div>
                <div class="main-menu menu-hover">
                    <nav>
                        <ul>
                            
                            <li><a href="<?php echo base_url('customer/dashboard') ?>">Beranda</a></li>
                            <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>
                            <li><a href="<?php echo base_url('customer/dashboard') ?>">Mobil <span>New</span></a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="currency">
                    <ul>
                        <li><a href="#">EN</a></li>
                        <li><a href="#">RN</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right-sidebar">
                <div class="header-search-cart-login">
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/logo/logo.png" alt="">
                        </a>
                    </div>
                    <div class="header-search">
                        <form action="#">
                            <input placeholder="Search What you want" type="text">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-login">
                        <ul>
                            <?php if($this->session->userdata('nama')) { ?>
                                <li><a href="<?php echo base_url('customer/dashboard')?>">Welcome <?php echo $this->session->userdata('nama')?> | <?php echo $this->session->userdata('id_customer') ?></a></li>
                                <li><a href="<?php echo base_url('auth/logout')?>">Logout</a></li>
                                <li><a href="<?php echo base_url('auth/ganti_password')?>">Forget Password</a></li>
                            <?php }else{ ?>
                                <li><a href="<?php echo base_url('auth/login')?>">Login</a></li>
                                <li><a href="<?php echo base_url('register')?>">Reg</a></li>
                                <!-- <li><a href="<?php echo base_url('auth/ganti_password')?>">Forget Password</a></li> -->

                            <?php } ?>

                        </ul>
                    </div>
                    <div class="header-cart cart-res">
                        <a class="icon-cart" href="#">
                            <i class="ti-shopping-cart"></i>
                            <span class="shop-count pink">02</span>
                        </a>
                        <ul class="cart-dropdown">
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/cart/1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Bits Headphone</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/cart/2.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Bits Headphone</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/cart/3.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#"> Bits Headphone</a></h5>
                                    <h6><a href="#">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="cart-space">
                                <div class="cart-sub">
                                    <h4>Subtotal</h4>
                                </div>
                                <div class="cart-price">
                                    <h4>$240.00</h4>
                                </div>
                            </li>
                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="#">view cart</a>
                                <a class="cart-btn btn-hover" href="#">checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="slider-area ">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/15.jpg)">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                                <h1 class="animated">Fashion</h1>
                                <p class="animated">Create you own style for better looks. </p>
                            </div>
                            <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/9.png" alt="">
                                </div>
                                <div class="slider-img-2">
                                    <img class="tilter" src="<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/7.png" alt="">
                                </div>
                                <div class="slider-img-3">
                                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/8.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/15.jpg)">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                                <h1 class="animated">Fashion</h1>
                                <p class="animated">Create you own style for better looks. </p>
                            </div>
                            <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/9.png" alt="">
                                </div>
                                <div class="slider-img-4 slider-mrg">
                                    <img class="tilter" src="<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/10.png" alt="">
                                </div>
                                <div class="slider-img-3">
                                    <img src="<?php echo base_url('assets/assets_customer/') ?>assets/img/slider/8.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>