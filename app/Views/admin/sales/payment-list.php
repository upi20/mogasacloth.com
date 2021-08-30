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
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="dari">Dari:</label>
										<input type="date" class="form-control" id="dari">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="sampai">Sampai:</label>
										<input type="date" class="form-control" id="sampai">
									</div>
								</div>
							</div>
						</div>
							<div class="pull-right">
								<a data-url="<?= base_url ?>admin/sales-payment-pdf" id="btn-cetak-pdf" href="<?= base_url ?>admin/sales-payment-pdf" target="_blank" class="btn btn-danger btn-sm">Ekport PDF</a>
								<a href="<?= base_url ?>admin/sales-payment-excel" target="_blank" class="btn btn-success btn-sm">Ekport Excel</a>
							</div>
				
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>			                
									<tr>
										<th data-class="expand"><i class="fa fa-fw fa-info-circle text-muted hidden-md hidden-sm hidden-xs"></i>No Transaksi</th>
										<th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Nama</th>
										<th data-hide="phone"><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Tanggal</th>
										<!-- <th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Nomor Rekening</th> -->
										<th data-hide="phone"><i class="fa fa-fw fa-money text-muted hidden-md hidden-sm hidden-xs"></i> Total</th>
										<th data-hide="phone"><i class="fa fa-fw fa-credit-card text-muted hidden-md hidden-sm hidden-xs"></i> Pembayaran Jenis</th>
										<th data-hide="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Nama Bank</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
										<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
										<th data-hide="phone"><i class="fa fa-fw fa-thumb-tack text-muted hidden-md hidden-sm hidden-xs"></i>Action</th>
									</tr>
								</thead>
								<tbody>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="form">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="tanggal">Preview Image</label>
								<br>
								<img src="" id="image-preview" width="100%"> 
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form id="form2">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title" id="myModalLabel2"></h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="hidden" name="idResi" id="idResi">
								<label for="tanggal">No Resi Pengiriman</label>
								<br>
								<input type="text" name="no_resi" id="no_resi" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn-sm btn-success" type="submit">Kirim</button>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
    let type

    $(() =>
    {

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

    	// Initialize table
    	const $table 	= $('#dt_basic').DataTable()
		$table.columns( 0 )
	    .order( 'desc' )
	    .draw()

	    // Get data
	    get_data()


    	$('#form2').submit(ev =>
	    {
	    	ev.preventDefault()

	    	$('#myModal2').modal('hide')

	    	let fd = new FormData()

	    	let id = $('#idResi').val()
	    	let no_resi = $('#no_resi').val()
	    	
	    	// Form data append
	        fd.append('check_code', id)
	        fd.append('check_resi', no_resi)

	    	// Done message update data
    		$.doneMessage('Input No Resi Berhasil.','<?= $title ?>')

	    	// Execute update data
    		$.ajax({
    			method: 'post',
    			url: '<?= base_url ?>admin/sales-payment-resi',
    			data: fd,
	            processData: false,
	            contentType: false,
	            cache: false,
	            async: false,
    		})
    		.then(data => JSON.parse(data))
    		.then(data =>
    		{
		    	setInterval(() => { location.reload() }, 300)
    		})
	    })
    	

    	// Execute Function
    	$('#OkCheck').on('click', ev => 
    	{ 
    		ev.preventDefault()

	    	$('#ModalCheck').modal('hide')
			
			// Done message execute data
    		$.doneMessage('Chenge status success.','<?= $title ?>')

    		// Id value
    		let id = $('#idCheck').val()

	    	// Execute data
	    	$.ajax({
    			method: 'put',
    			url: '<?= base_url ?>admin/sales-payment-list-update',
    			data: {
    				id: id,
    				type: type,
    			}
    		})
    		.then(data =>
    		{
    			console.log(data)

		    	setInterval(() => { location.reload() }, 300)
    		})
    	})

    	// Get data
    	function get_data(where = null)
    	{
	    	$.ajax({
	    		method: 'post',
	    		url: '<?= base_url ?>admin/sales-payment-data',
	    		data: where
	    	})
    		.then(data => JSON.parse(data))
    		.then(data =>
    		{
    			console.log(data)
    			for(let i = 0;i < data.length;i++)
    			{
	    			addRow(data[i])		
    			}
    		})
    	}

    	// Add Row
		function addRow(data) 
		{
			let row = [
				data.checp_check_code,
				data.check_name,
				data.created_at,
				// data.checp_account_number,
				data.checp_gross_amount,
				data.checp_payment_type,
				data.checp_bank,
				(data.checp_fraud_status =='pendding') ? 'Menunggu Pembayaran' : 
				(data.checp_fraud_status =='Expire') ? 'Batas Waktu Bayar Habis' : 
				(data.checp_fraud_status =='accept') ? 'Sudah Dibayar' : '',
				(data.checp_status_value =='SETTLEMENT') ? 'Pembayaran Terkonfirmasi' : 
				(data.checp_status_value == 'pendding') ? 'Menunggu Konfirmasi Pembayaran' : 
				(data.checp_status_value == 'FAILURE') ? 'Gagal Mengkonfirmasi Pembayaran':  
				(data.checp_status_value == 'Expire') ? 'Batas Waktu Bayar Habis':  
				(data.checp_status_value == 'Sent') ? 'Dikirim':  
				(data.checp_status_value == 'checked') ? 'Belum Diperiksa': '',
				'<div>'
					+'<button class="btn btn-warning btn-sm" onclick="View(`'+data.checp_file+'`)">'
						+'<i class="fa fa-eye"></i> Lihat Bukti'
					+'</button>'
					+'<button class="btn btn-primary btn-sm" onclick="Acc(`'+data.checp_check_code+'`)">'
						+'<i class="fa fa-check"></i> Konfirmasi'
					+'</button>'
					+'<button class="btn btn-danger btn-sm" onclick="Refuse(`'+data.checp_check_code+'`)">'
						+'<i class="fa fa-times"></i> Tolak'
					+'</button>'
					+'<button class="btn btn-success btn-sm" onclick="Resi(`'+data.checp_check_code+'`)">'
					+'<i class="fa fa-file"></i> Input No Resi'
					+'</button>'
					+'<a target="_blank" href="<?= base_url ?>my/checkout/list/pdf/by/id/id/'+data.checp_check_code+'" class="btn btn-danger btn-sm">'
					+'<i class="fa fa-print"></i> PDF Invoice</a>'
				+'</div>'
			]

			let $node = $($table.row.add(row).draw().node())
			$node.attr('data-id', data.checp_id)
		}
    })

    // View Image
    const View = (file) =>
    {
    	$('#myModal').modal('show')
    	$('#image-preview').attr('src', `<?= base_url ?>transaction/proof/${file}`)
    }

    // Acc button click
    const Acc = (id) =>
    {
    	type = 'SETTLEMENT'
    	$('#LabelCheck').html('Form Accept Payment')
    	$('#ContentCheck').html('Are you sure this payment is valid ?')
    	$('#ModalCheck').modal('show')
    	$('#idCheck').val(id)
    }

    // Refuse button click
    const Refuse = (id) =>
    {
    	type = 'FAILURE'
    	$('#LabelCheck').html('Form Refuse Payment')
    	$('#ContentCheck').html('Are you sure this payment not valid ?')
    	$('#ModalCheck').modal('show')
    	$('#idCheck').val(id)
    }
    // View Image
    const Resi = (id) =>
    {
    	$('#myModal2').modal('show')
    	$('#myModalLabel2').html('Masukan No Resi')
    	$('#idResi').val(id)
    }
</script>