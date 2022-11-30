  <!-- Main Container -->
  <main id="main-container" style="min-height: 2130px;">
  	<div class="bg-image bg-image-bottom" style="background-image: url('assets/media/photos/photo34@2x.jpg');">
  		<div class="bg-primary-dark-op">
  			<div class="content content-top text-center overflow-hidden">
  				<div class="pt-50 pb-20">
  					<h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
  					<h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="content">
  		<h2 class="content-heading">Documents Management</h2>


  		<!-- Dynamic Table Full -->
  		<div class="block">
  			<div class="block-header block-header-default">
  				<h3 class="block-title">Documents<small></small></h3>
  			</div>
  			<div class="block-content block-content-full">
  				<!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
  				<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
  					<thead>
  						<tr>
  							<th class="text-center"></th>
  							<th class="d-none d-sm-table-cell">Nama Alat</th>
  							<th class="d-none d-sm-table-cell">Pabrik Pembuat</th>
  							<th class="d-none d-sm-table-cell" style="width: 15%;">Kapasitas</th>
  							<th class="text-center" style="width: 15%;">Lokasi</th>
  							<th class="text-center" style="width: 15%;">No Seri</th>
  							<th class="text-center" style="width: 15%;">No Perizinan</th>
  							<th class="text-center" style="width: 15%;">Expired Date</th>
  							<th class="text-center" style="width: 15%;">Action</th>

  						</tr>
  					</thead>
  					<tbody>
  						<?php
							$index = 0;
							foreach ($documents as $item) {
								$index++;
							?>
  							<tr>
  								<td class="text-center"><?php echo $index; ?></td>
  								<td class="d-none d-sm-table-cell"><?php echo $item['nama_alat']; ?></td>
  								<td class="d-none d-sm-table-cell"><?php echo $item['pabrik_pembuat']; ?></td>
  								<td class="d-none d-sm-table-cell"><?php echo $item['kapasitas']; ?></td>
  								<td class="d-none d-sm-table-cell"><?php echo $item['lokasi']; ?></td>
  								<td class="d-none d-sm-table-cell"><?php echo $item['no_seri']; ?></td>
  								<td class="d-none d-sm-table-cell"><?php echo $item['no_perijinan']; ?></td>

  								<td class="d-none d-sm-table-cell">
  									<span class="badge badge-primary"><?php echo $item['expired_date']; ?></span>
  								</td>
  								<td class="text-center">
  									<button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
  										<i class="fa fa-user"></i>
  									</button>
  								</td>
  							</tr>
  						<?php
							}  ?>
  					</tbody>
  				</table>
  			</div>
  		</div>
  	</div>
  	<!-- END Page Content -->

  </main>
  -->
  <script src="assets/js/codebase.core.min.js"></script>

  <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
  <!-- <script src="assets/js/codebase.app.min.js"></script>

    Page JS Plugins
     Page JS Code -->
  <!-- <script src="assets/js/pages/be_tables_datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script> -->

  <!-- END Main Container -->
