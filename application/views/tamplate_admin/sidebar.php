
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo base_url('assets/assets_admin') ?>/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url('assets/assets_admin') ?>/img/user.png" class="img-circle" alt="Avatar"> 
								<span>Welcome <?php echo $this->session->userdata('nama') ?></span>
								<i class="icon-submenu lnr lnr-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?php echo base_url('auth/logout')?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url('admin/dashboard')?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo base_url('admin/data_mobil')?>" class=""><i class="lnr lnr-code"></i> <span>Data Mobil</span></a></li>
						<li><a href="<?php echo base_url('admin/data_type')?>" class=""><i class="lnr lnr-chart-bars"></i> <span>Data Type</span></a></li>
						<li><a href="<?php echo base_url('admin/data_customer')?>" class=""><i class="lnr lnr-cog"></i> <span>Data Customer</span></a></li>
						<li><a href="<?php echo base_url('admin/transaksi')?>" class=""><i class="lnr lnr-alarm"></i> <span>Transaksi</span></a></li>
						<li><a href="<?php echo base_url('admin/laporan')?>" class=""><i class="lnr lnr-file-empty"></i> <span>Laporan</span></a></li>

						<li><a href="<?php echo base_url('auth/logout')?>" class=""><i class="lnr lnr-look"></i> <span>Logout</span></a></li>
						<li><a href="<?php echo base_url('auth/ganti_password')?>" class=""><i class="lnr lnr-lock"></i> <span>Forget Password</span></a></li>
					</ul>
				</nav>
			</div>
		</div>