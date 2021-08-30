<style type="text/css">
	.angka{
		font-size: 30px;
	}
	.card{
		padding-right: 40px;
		padding-left: 40px;
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.icon{
		font-size: 60px;
		padding-right: 20px;
	}
	.card{
		border-radius: 10px;
	}

	.p-10{
		padding: 10px
	}
</style>

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
			
			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 p-10">
				<a href="<?= base_url ?>admin/catalog-product">
				<div class="card btn-success">
					<div class="header">
						<div class="row">
							<div class="col-md-4">
								<i class="fa fa-tag icon" style=""></i>
							</div>
							<div class="col-md-8">
								<div class="angka" id="stok">
									<b id="stok">
										<?= [$prod_stok];?>
									</b>
								</div>
								<div class="huruf">
									Stok Barang
								</div>
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<!-- <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 p-10">
				<a href="<?= base_url ?>admin/sales-payment-list">
					<div class="card btn-warning">
						<div class="header">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-shopping-cart icon"></i>
								</div>
								<div class="col-md-8">
									<div class="angka" id="masuk">
										
									</div>
									<div class="huruf">
										Orderan Masuk
									</div>
								</div>
							</div>
						</div>
					</div>	
				</a>
			</div> -->
			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 p-10">
				<a href="<?= base_url ?>admin/sales-payment-list">
					<div class="card btn-primary">
						<div class="header">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-file icon"></i>
								</div>
								<div class="col-md-8">
									<div class="angka" id="proses">
										<!-- <b id="proses">
											100
										</b> -->
									</div>
									<div class="huruf">
										Orderan
									</div>
								</div>
							</div>
						</div>
					</div>	
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 p-10">
				<a href="<?= base_url ?>admin/sales-order-list">
					<div class="card btn-danger">
						<div class="header">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-check icon"></i>
								</div>
								<div class="col-md-8">
									<div class="angka" id="keluar">
										<!-- <b id="selesai">
											100
										</b> -->
									</div>
									<div class="huruf">
										Orderan Selesai
									</div>
								</div>
							</div>
						</div>
					</div>	
				</a>
			</div>
			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 p-10">
				<a href="<?= base_url ?>admin/user">
					<div class="card btn-danger">
						<div class="header">
							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-user icon"></i>
								</div>
								<div class="col-md-8">
									<div class="angka" id="user">
										<!-- <b id="selesai">
											100
										</b> -->
									</div>
									<div class="huruf">
										Pengguna
									</div>
								</div>
							</div>
						</div>
					</div>	
				</a>
			</div>

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
<script type="text/javascript">

    $(() =>
    {
    	$.ajax({
    		method: 'post',
    		url: '<?= base_url ?>admin/dashboard/data',
    		data: null,
    	})
    	.then(data => JSON.parse(data))
		.then(data =>
		{
			console.log(data)
	    	$('#stok').html('<b>'+ data.stok +'</b>')
	    	$('#masuk').html('<b>'+ data.masuk +'</b>')
	    	$('#proses').html('<b>'+ data.proses +'</b>')
	    	$('#keluar').html('<b>'+ data.selesai +'</b>')
	    	$('#user').html('<b>'+ data.user +'</b>')
		})
    })

</script>