<!-- MAIN CONTENT -->
<div id="content">

	<!-- row -->
	<div class="row">
		
		<!-- col -->
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
				<!-- PAGE HEADER -->
				<i class="fa-fw fa fa-table"></i> 
				
				<?= $title ?>
			</h1>
		</div>
		<!-- end col -->
		
	</div>
	<!-- end row -->
	
	<!--
		The ID "widget-grid" will start to initialize all widgets below 
		You do not need to use widgets if you dont want to. Simply remove 
		the <section></section> and you can use wells or panels instead 
		-->
	
	<!-- widget grid -->
	<section id="widget-grid" class="">
	
		<!-- row -->
		<div class="row">
			
			<!-- NEW WIDGET START -->
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<!-- Widget ID (each widget will need unique ID)-->
				<div class="jarviswidget" id="wid-id-0"
					data-widget-colorbutton="false"
					data-widget-editbutton="false"
					data-widget-deletebutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-table"></i> </span>
					</header>
	
					<!-- widget div-->
					<div>
						
						<!-- widget edit box -->
						<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->
							<input class="form-control" type="text">	
						</div>
						<!-- end widget edit box -->
						
						<!-- widget content -->
						<div class="widget-body">
						<div class="col-md-6">
							<form method="post" action="<?= base_url ?>admin/sales-order-pdf" id="filter-tanggal">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="dari">Dari:</label>
											<input type="date" class="form-control" name="dari">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="sampai">Sampai:</label>
											<input type="date" class="form-control" name="sampai">
										</div>
									</div>
								</div>

						</div>
							<div class="pull-right">
								<button  class="btn btn-danger btn-sm" type="submit" for="filter-tanggal">Export PDF</button>
							</form>
								<a href="<?= base_url ?>admin/sales-order-excel" target="_blank" class="btn btn-success btn-sm">Export Excel</a>
							</div>
							
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>			                
									<tr>
										<th data-class="expand"><i class="fa fa-fw fa-info-circle text-muted hidden-md hidden-sm hidden-xs"></i> No Transaksi</th>
										<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Nama</th>
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Total Pembayaran</th>
										<th data-hide="phone"><i class="fa fa-fw fa-align-justify text-muted hidden-md hidden-sm hidden-xs"></i> Alamat</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status Pemesanan</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($records as $q):?>
									<tr data-id="<?= $q['check_id'] ?>">
										<td><?=$q['check_invoice']?></td>
										<td><?=$q['check_name']?></td>
										<td><?=nominal($q['check_total'])?></td>
										<td><?=$q['check_description']?></td>
										<td>
										    <?php if ($q['check_status_value'] == 'Sent') {
												echo "Dikirim";
											}elseif ($q['check_status_value'] == 'Pendding') {
												echo "Menunggu Konfirmasi Pembayaran";
											}elseif ($q['check_status_value'] == 'FAILURE') {
												echo "Gagal Mengkonfirmasi Pembayaran";	
											}
											?>
										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>	
						</div>
						<!-- end widget content -->
						
					</div>
					<!-- end widget div -->
					
				</div>
				<!-- end widget -->
	
			</article>
			<!-- WIDGET END -->
			
		</div>
	
		<!-- end row -->
	
		<!-- row -->
	
		<div class="row">
	
			<!-- a blank row to get started -->
			<div class="col-sm-12">
				<!-- your contents here -->
			</div>
				
		</div>
	
		<!-- end row -->
	
	</section>
	<!-- end widget grid -->

</div>
<!-- END MAIN CONTENT -->

<script>
	$(document).ready(()=>{

    	$("#dari").change(() => {
				changeUrlBtn();
			})
			$("#sampai").change(() => {
				changeUrlBtn();
			})

			function changeUrlBtn() {
				const btn = $("#btn-cetak-pdf");
				const url = btn.data('url');
				const dari = $("#dari").val();
				const sampai = $("#sampai").val();
				btn.attr('href', `${url}?dari=${dari}&sampai=${sampai}`);
			}
	});
</script>