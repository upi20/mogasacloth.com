


<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="<?= base_url ?>" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<span class="stext-109 cl4">
			Riwayat Pembelian
		</span>
	</div>
</div>


<!-- Content page -->
<section class="bg0 p-t-52 p-b-20">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 p-b-80">
				<div class="p-r-45 p-r-0-lg">
					<div class="p-t-32">
						<h4 class="ltext-109 cl2 p-b-28">
							Riwayat Pembelian
						</h4>

						<table id="dt_basic" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>No Transaksi</th>
									<th>No Invoice</th>
									<th>Tanggal Transaksi</th>
									<th>Tanggal Bayar</th>
									<th>Total Harga</th>
									<th>Status Transaksi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- Transaction list -->
								<?php $no = 1; foreach($records as $r) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td>
											<a href="<?= base_url ?>my/checkout/list/detail/by/id/<?= $r['check_code'] ?>">
												<?= $r['check_code'] ?>
											</a>
										</td>
										<td>
											<a href="<?= base_url ?>my/checkout/list/detail/by/id/<?= $r['check_code'] ?>">
												<?= $r['check_invoice'] ?>
											</a>
										</td>
										<td><?= date_text($r['trans_date']) ?></td>
										<td><?= ($r['check_status_code'] > 0) ? date_text($r['trans_date']) : '-' ?></td>
										<td><?= nominal($r['check_total']) ?></td>
										<td class="text-primary">
											<?php if ($r['check_status_value'] == 'SETTLEMENT') {
												echo "Pembayaran Terkonfirmasi";
											}elseif ($r['check_status_value'] == 'Pendding') {
												echo "Menunggu Konfirmasi Pembayaran";
											}elseif ($r['check_status_value'] == 'FAILURE') {
												echo "Gagal Mengkonfirmasi Pembayaran";	
											}elseif($r['check_status_value'] == 'Expire'){
												echo "Batas Waktu Bayar Habis";
											}elseif($r['check_status_value'] == 'Sent'){
												echo "Dikirim";
											}
											?>
										</td>
										<td>
											<?php if($r['checp_type'] === '') : ?>
												<div class="">
													<a href="<?= base_url ?>my/checkout/list/detail/by/id/<?= $r['check_code'] ?>" class="btn btn-warning btn-sm">Detail</a>
													<a href="<?= base_url ?>my/checkout/list/paid/by?id=<?= $r['check_code'] ?>" class="btn btn-success btn-sm">Upload Bukti</a>
													<button onclick="cancel('<?= $r['check_code'] ?>')" class="btn btn-danger btn-sm">Batal</button>
												</div>
											<?php else : ?>
												<?php if($r['check_status_value'] === 'SETTLEMENT' or $r['check_status_value'] === 'FAILURE') : ?>
													<?php if($r['check_status_value'] == 'SETTLEMENT') : ?>
														<a href="<?= base_url ?>my/checkout/list/detail/by/id/<?= $r['check_code'] ?>" class="btn btn-warning btn-sm">Detail</a>
													<?php endif; ?>
												<?php else : ?>
													<div class="">
														<a target="_blank" href="<?= base_url ?>my/checkout/list/pdf/by/id/id/<?= $r['check_code'] ?>" class="btn btn-danger btn-sm">PDF Invoice</a>
														<a href="<?= base_url ?>my/checkout/list/detail/by/id/<?= $r['check_code'] ?>" class="btn btn-warning btn-sm">Detail</a>
														<button onclick="cancel('<?= $r['check_code'] ?>')" class="btn btn-danger btn-sm">Cancel</button>
													</div>
												<?php endif; ?>
											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; ?>
								<!-- # Transaction list -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

<script type="text/javascript">
	function cancel(id)
	{	
		swal({
            title: 'Cancel Order',
      		text: 'Are you sure want to cancel this order ?',
      		icon: 'warning',
        	buttons: {
			  	cancel: true,
		    	confirm: true,
		  	},
        }).then((yes) => 
        {
            if(yes) 
            {
                $.ajax({
                	method: 'put',
	    			url: '<?= base_url ?>admin/sales-payment-list-update',
	    			data: {
	    				id: id,
	    				type: 'FAILURE',
	    			}
                }).then(data =>
	    		{
			    	location.reload()
	    		})
            }
        })
	}
</script>