<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
	<!-- Side Overlay-->
	<aside id="side-overlay">
		<!-- Side Header -->
		<div class="content-header content-header-fullrow">
			<div class="content-header-section align-parent">
				<!-- Close Side Overlay -->
				<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
				<button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
					<i class="fa fa-times text-danger"></i>
				</button>
				<!-- END Close Side Overlay -->

				<!-- User Info -->
				<div class="content-header-item">
					<a class="img-link mr-5" href="be_pages_generic_profile.html">
						<img class="img-avatar img-avatar32" src="<?= base_url(). 'assets/media/avatars/avatar15.jpg'?>" alt="">
					</a>
					<a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
				</div>
				<!-- END User Info -->
			</div>
		</div>
		<!-- END Side Header -->

		<!-- Side Content -->
		<div class="content-side">
			<!-- Search -->
			<!-- <div class="block pull-t pull-r-l">
				<div class="block-content block-content-full block-content-sm bg-body-light">
					<form action="be_pages_generic_search.html" method="post">
						<div class="input-group">
							<input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
							<div class="input-group-append">
								<button type="submit" class="btn btn-secondary px-10">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div> -->
			<!-- END Search -->

			<!-- Mini Stats -->
			<div class="block pull-r-l">
				<div class="block-content block-content-full block-content-sm bg-body-light">
					<div class="row">
						<div class="col-4">
							<div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
							<div class="font-size-h4">460</div>
						</div>
						<div class="col-4">
							<div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
							<div class="font-size-h4">728</div>
						</div>
						<div class="col-4">
							<div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
							<div class="font-size-h4">$7,860</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Mini Stats -->

			<!-- Friends -->
			<div class="block pull-r-l">
				<div class="block-header bg-body-light">
					<h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
							<i class="si si-refresh"></i>
						</button>
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content">
					<ul class="nav-users push">
						<li>
							<a href="be_pages_generic_profile.html">
								<img class="img-avatar" src="assets/media/avatars/avatar1.jpg" alt="">
								<i class="fa fa-circle text-success"></i> Betty Kelley
								<div class="font-w400 font-size-xs text-muted">Photographer</div>
							</a>
						</li>
						<li>
							<a href="be_pages_generic_profile.html">
								<img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
								<i class="fa fa-circle text-success"></i> Jose Wagner
								<div class="font-w400 font-size-xs text-muted">Web Designer</div>
							</a>
						</li>
						<li>
							<a href="be_pages_generic_profile.html">
								<img class="img-avatar" src="assets/media/avatars/avatar4.jpg" alt="">
								<i class="fa fa-circle text-warning"></i> Alice Moore
								<div class="font-w400 font-size-xs text-muted">UI Designer</div>
							</a>
						</li>
						<li>
							<a href="be_pages_generic_profile.html">
								<img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
								<i class="fa fa-circle text-danger"></i> Jesse Fisher
								<div class="font-w400 font-size-xs text-muted">Copywriter</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Friends -->

			<!-- Activity -->
			<div class="block pull-r-l">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
							<i class="si si-refresh"></i>
						</button>
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content">
					<ul class="list list-activity">
						<li>
							<i class="si si-wallet text-success"></i>
							<div class="font-w600">+$29 New sale</div>
							<div>
								<a href="javascript:void(0)">Admin Template</a>
							</div>
							<div class="font-size-xs text-muted">5 min ago</div>
						</li>
						<li>
							<i class="si si-close text-danger"></i>
							<div class="font-w600">Project removed</div>
							<div>
								<a href="javascript:void(0)">Best Icon Set</a>
							</div>
							<div class="font-size-xs text-muted">26 min ago</div>
						</li>
						<li>
							<i class="si si-pencil text-info"></i>
							<div class="font-w600">You edited the file</div>
							<div>
								<a href="javascript:void(0)">
									<i class="fa fa-file-text-o"></i> Docs.doc
								</a>
							</div>
							<div class="font-size-xs text-muted">3 hours ago</div>
						</li>
						<li>
							<i class="si si-plus text-success"></i>
							<div class="font-w600">New user</div>
							<div>
								<a href="javascript:void(0)">StudioWeb - View Profile</a>
							</div>
							<div class="font-size-xs text-muted">5 hours ago</div>
						</li>
						<li>
							<i class="si si-wrench text-warning"></i>
							<div class="font-w600">App v5.5 is available</div>
							<div>
								<a href="javascript:void(0)">Update now</a>
							</div>
							<div class="font-size-xs text-muted">8 hours ago</div>
						</li>
						<li>
							<i class="si si-user-follow text-pulse"></i>
							<div class="font-w600">+1 Friend Request</div>
							<div>
								<a href="javascript:void(0)">Accept</a>
							</div>
							<div class="font-size-xs text-muted">1 day ago</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Activity -->

			<!-- Profile -->
			<div class="block pull-r-l">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content">
					<form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
						<div class="form-group mb-15">
							<label for="side-overlay-profile-name">Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fa fa-user"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group mb-15">
							<label for="side-overlay-profile-email">Email</label>
							<div class="input-group">
								<input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fa fa-envelope"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group mb-15">
							<label for="side-overlay-profile-password">New Password</label>
							<div class="input-group">
								<input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fa fa-asterisk"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group mb-15">
							<label for="side-overlay-profile-password-confirm">Confirm New Password</label>
							<div class="input-group">
								<input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fa fa-asterisk"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-6">
								<button type="submit" class="btn btn-block btn-alt-primary">
									<i class="fa fa-refresh mr-5"></i> Update
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END Profile -->

			<!-- Settings -->
			<div class="block pull-r-l">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content">
					<div class="row gutters-tiny">
						<div class="col-6">
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
								<label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
							</div>
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
								<label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
							</div>
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
								<label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
							</div>
						</div>
						<div class="col-6">
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
								<label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
							</div>
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
								<label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
							</div>
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
								<label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Settings -->
		</div>
		<!-- END Side Content -->
	</aside>
	<!-- END Side Overlay -->

	<!-- Sidebar -->
	<!--
		Helper classes

		Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
		Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
			If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

		Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
		Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
			- use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
	-->
	<nav id="sidebar">
		<!-- Sidebar Content -->
		<div class="sidebar-content">
			<!-- Side Header -->
			<div class="content-header content-header-fullrow px-15">
				<!-- Mini Mode -->
				<div class="content-header-section sidebar-mini-visible-b">
					<!-- Logo -->
					<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
						<span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
					</span>
					<!-- END Logo -->
				</div>
				<!-- END Mini Mode -->

				<!-- Normal Mode -->
				<div class="content-header-section text-center align-parent sidebar-mini-hidden">
					<!-- Close Sidebar, Visible only on mobile screens -->
					<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
					<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
						<i class="fa fa-times text-danger"></i>
					</button>
					<!-- END Close Sidebar -->

					<!-- Logo -->
					<div class="content-header-item">
						<a class="link-effect font-w700" href="index.html">
							<i class="si si-fire text-primary"></i>
							<span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
						</a>
					</div>
					<!-- END Logo -->
				</div>
				<!-- END Normal Mode -->
			</div>
			<!-- END Side Header -->

			<!-- Side User -->
			<div class="content-side content-side-full content-side-user px-10 align-parent">
				<!-- Visible only in mini mode -->
				<div class="sidebar-mini-visible-b align-v animated fadeIn">
					<img class="img-avatar img-avatar32" src="<?= base_url(). 'assets/media/avatars/avatar15.jpg'?>" alt="">
				</div>
				<!-- END Visible only in mini mode -->

				<!-- Visible only in normal mode -->
				<div class="sidebar-mini-hidden-b text-center">
					<a class="img-link" href="">
						<img class="img-avatar" src="<?= base_url(). 'assets/media/avatars/avatar15.jpg'?>" alt="">
					</a>
					<ul class="list-inline mt-10">
						<li class="list-inline-item">
							<a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href=""><?php echo $this->session->userdata('username'); ?></a>
						</li>
						<li class="list-inline-item">
							<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
							<a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
								<i class="si si-drop"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="link-effect text-dual-primary-dark" href="<?php echo base_url('login/logout'); ?> ">
								<i class="si si-logout"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- END Visible only in normal mode -->
			</div>
			<!-- END Side User -->

			<!-- Side Navigation -->
			<div class="content-side content-side-full">
				<ul class="nav-main">
					<?php if($this->session->userdata('akses') == 1){ ?>
						<li>
							<a class="active" href="<?= site_url('document');?>"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Riksa Uji</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('home'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('add'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('imports'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Lisensi K3L</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('homeLisensi'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('addLisensi'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('importsLisensi'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<!-- <li >
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-table"></i><span class="sidebar-mini-hide">Master Data</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('viewKaryawan'); ?>">Data Karyawan</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('viewShift'); ?>">Data Shift Kerja</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('imports'); ?>">Data Material</a>
								</li>
							</ul>
						</li> -->
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Management K3L</span></a>
							<ul>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">Manual</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadData'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewData');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">SOP</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataSOP'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataSOP');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IK</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataIK'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataIK');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IAD K3 & LINGKUNGAN</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataIK'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataIAD');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">FORM</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataForm'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataForm');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">MSDS & Safety Sign</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataMSDS'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataMSDS');?>">View Document</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					<?php }elseif($this->session->userdata('akses') == 2){ ?> 
						<li>
							<a class="active" href="<?= site_url('document');?>"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Riksa Uji</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('home'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('add'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('imports'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li >
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Lisensi K3L</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('homeLisensi'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('addLisensi'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('importsLisensi'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Management K3L</span></a>
							<ul>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">SOP</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataSOP'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataSOP');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IK</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataIK'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataIK');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IAD K3 & LINGKUNGAN</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataIK'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataIAD');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">FORM</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataForm'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataForm');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">MSDS & Safety Sign</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataMSDS'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataMSDS');?>">View Document</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<!-- <li >
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-desktop"></i><span class="sidebar-mini-hide">Produksi</span></a>
							<ul>
								<li>
									<a class="active" href="<?= site_url('ProsWWT'); ?>">Input Proses WWT</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('ShowWWT'); ?>">Data Proses WWT</a>
								</li>
							</ul>
						</li> -->
					<?php }elseif($this->session->userdata('akses') == 3){ ?>
						<li>
							<a class="active" href="<?= site_url('document');?>"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Riksa Uji</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('home'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('add'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('imports'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li >
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Lisensi K3L</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('homeLisensi'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('addLisensi'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('importsLisensi'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Management K3L</span></a>
							<ul>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IK</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataIK'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataIK');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">FORM</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataForm'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataForm');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">MSDS & Safety Sign</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataMSDS'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataMSDS');?>">View Document</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					<?php }elseif($this->session->userdata('akses') == 4){ ?>
						<li>
							<a class="active" href="<?= site_url('document');?>"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Riksa Uji</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('home'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('add'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('imports'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li >
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Lisensi K3L</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('homeLisensi'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('addLisensi'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('importsLisensi'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Management K3L</span></a>
							<ul>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">FORM</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataForm'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataForm');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">MSDS & Safety Sign</span></a>
									<ul>
										<!-- <li>
											<a class="active" href="<?php echo site_url('uploadDataMSDS'); ?>">Upload Document</a>
										</li> -->
										<li>
											<a class="active" href="<?= site_url('viewDataMSDS');?>">View Document</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					<?php }elseif($this->session->userdata('akses') == 5){ ?>
						<li>
							<a class="active" href="<?= site_url('document');?>"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Riksa Uji</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('home'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('add'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('imports'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Document Lisensi K3L</span></a>
							<ul>
								<li>
									<a class="active" href="<?php echo site_url('homeLisensi'); ?>">View Documents</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('addLisensi'); ?>">Add Document</a>
								</li>
								<li>
									<a class="active" href="<?php echo site_url('importsLisensi'); ?>">Import Documents</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Management K3L</span></a>
							<ul>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">Manual</span></a>
									<ul>
										<li>
											<a class="active" href="<?php echo site_url('uploadData'); ?>">Upload Document</a>
										</li>
										<li>
											<a class="active" href="<?= site_url('viewData');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">SOP</span></a>
									<ul>
										<li>
											<a class="active" href="<?php echo site_url('uploadDataSOP'); ?>">Upload Document</a>
										</li>
										<li>
											<a class="active" href="<?= site_url('viewDataSOP');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IK</span></a>
									<ul>
										<li>
											<a class="active" href="<?php echo site_url('uploadDataIK'); ?>">Upload Document</a>
										</li>
										<li>
											<a class="active" href="<?= site_url('viewDataIK');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">IAD K3 & LINGKUNGAN</span></a>
									<ul>
										<li>
											<a class="active" href="<?php echo site_url('uploadDataIAD'); ?>">Upload Document</a>
										</li>
										<li>
											<a class="active" href="<?= site_url('viewDataIAD');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">FORM</span></a>
									<ul>
										<li>
											<a class="active" href="<?php echo site_url('uploadDataForm'); ?>">Upload Document</a>
										</li>
										<li>
											<a class="active" href="<?= site_url('viewDataForm');?>">View Document</a>
										</li>
									</ul>
								</li>
								<li><a class="nav-submenu" data-toggle="nav-submenu"><span class="sidebar-mini-hide">MSDS & Safety Sign</span></a>
									<ul>
										<li>
											<a class="active" href="<?php echo site_url('uploadDataMSDS'); ?>">Upload Document</a>
										</li>
										<li>
											<a class="active" href="<?= site_url('viewDataMSDS');?>">View Document</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>

					<?php } ?>
				</ul>
			</div>
			<!-- END Side Navigation -->
		</div>
		<!-- Sidebar Content -->
	</nav>
	<!-- END Sidebar -->

	<!-- Header -->
	<header id="page-header">
		<!-- Header Content -->
		<div class="content-header">
			<!-- Left Section -->
			<div class="content-header-section">
				<!-- Toggle Sidebar -->
				<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
				<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
					<i class="fa fa-navicon"></i>
				</button>
				<!-- END Toggle Sidebar -->

				<!-- Open Search Section -->
				<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
				<!-- <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
					<i class="fa fa-search"></i>
				</button> -->
				<!-- END Open Search Section -->

				<!-- Layout Options (used just for demonstration) -->
				<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
				<!-- <div class="btn-group" role="group">
					<button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-wrench"></i>
					</button>
					<div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
						<h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
						<h6 class="dropdown-header">Color Themes</h6>
						<div class="row no-gutters text-center mb-5">
							<div class="col-2 mb-5">
								<a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
									<i class="fa fa-2x fa-circle"></i>
								</a>
							</div>
							<div class="col-2 mb-5">
								<a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
									<i class="fa fa-2x fa-circle"></i>
								</a>
							</div>
							<div class="col-2 mb-5">
								<a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
									<i class="fa fa-2x fa-circle"></i>
								</a>
							</div>
							<div class="col-2 mb-5">
								<a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
									<i class="fa fa-2x fa-circle"></i>
								</a>
							</div>
							<div class="col-2 mb-5">
								<a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
									<i class="fa fa-2x fa-circle"></i>
								</a>
							</div>
							<div class="col-2 mb-5">
								<a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
									<i class="fa fa-2x fa-circle"></i>
								</a>
							</div>
						</div>
						<h6 class="dropdown-header">Header</h6>
						<div class="row gutters-tiny text-center mb-5">
							<div class="col-6">
								<button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
							</div>
							<div class="col-6">
								<button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
							</div>
						</div>
						<h6 class="dropdown-header">Sidebar</h6>
						<div class="row gutters-tiny text-center mb-5">
							<div class="col-6">
								<button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
							</div>
							<div class="col-6">
								<button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
							</div>
						</div>
						<div class="d-none d-xl-block">
							<h6 class="dropdown-header">Main Content</h6>
							<button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
						</div>
						<div class="dropdown-divider"></div>
						<div class="row gutters-tiny text-center">
							<div class="col-6">
								<a class="dropdown-item mb-0" href="be_layout_api.html">
									<i class="si si-chemistry mr-5"></i> Layout API
								</a>
							</div>
							<div class="col-6">
								<a class="dropdown-item mb-0" href="be_ui_color_themes.html">
									<i class="fa fa-paint-brush mr-5"></i> Color Themes
								</a>
							</div>
						</div>
					</div>
				</div> -->
				<!-- END Layout Options -->
			</div>
			<!-- END Left Section -->

			<!-- Right Section -->
			<div class="content-header-section">
				<!-- User Dropdown -->
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user d-sm-none"></i>
						<!-- <span class="d-none d-sm-inline-block"><?php echo $_SESSION['username']; ?></span> -->
						<span class="d-none d-sm-inline-block"><?php echo $this->session->userdata('username'); ?></span>
						<i class="fa fa-angle-down ml-5"></i>
					</button>
				</div>
				<!-- END User Dropdown -->

				<!-- Notifications -->
				<!-- <div class="btn-group" role="group">
					<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-flag"></i>
						<span class="badge badge-primary badge-pill">5</span>
					</button>

				</div> -->
				<!-- END Notifications -->

				<!-- Toggle Side Overlay -->
				<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
				<!-- <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
					<i class="fa fa-tasks"></i>
				</button> -->
				<!-- END Toggle Side Overlay -->
			</div>
			<!-- END Right Section -->
		</div>
		<!-- END Header Content -->

		<!-- Header Search -->
		<div id="page-header-search" class="overlay-header">

		</div>
		<!-- END Header Search -->

		<!-- Header Loader -->
		<!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
		<!-- <div id="page-header-loader" class="overlay-header bg-primary">
			<div class="content-header content-header-fullrow text-center">
				<div class="content-header-item">
					<i class="fa fa-sun-o fa-spin text-white"></i>
				</div>
			</div>
		</div> -->
		<!-- END Header Loader -->
	</header>
	<!-- END Header -->
