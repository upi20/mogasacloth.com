<div style="width: 100%">
	<img src="<?= base_url ?>website/configuration/1613372195logo-mogasa.png" width="120" height="120">
	<h2><strong><?= $title ?></strong></h2>
	<h2>ORDER</h2>
	<p>Perum D'Boqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376</p>
	<hr>
</div>

<!-- widget content -->
<div class="widget-body">

	<h1></h1>
	

	<table class="table table-striped table-bordered table-hover" width="100%" border="1">
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
				<?php $no=1;$total=0; foreach($records as $q):?>
					<tr data-id="<?= $q['check_id'] ?>">
						<td><?=$q['check_code']?></td>
						<td><?=$q['user_name']?></td>
						<td><?=nominal($q['check_total'])?></td>
						<td><?=$q['check_description']?></td>
						<td><?=$q['check_status_value']?></td>
					</tr>

					 cek total pembayaran 
					<?php if ($q['check_status_value'] == 'SETTLEMENT'): ?>
						<?php $total = $total + $q['check_total'] ;?>
					<?php endif ?>
				<?php endforeach;?>
				<br>
				<tr>
					<td>Total Pendapatan : </td>
					<td><?=nominal($total);?></td>
				</tr>
			</tbody>
	</table>
</div>
<!-- end widget content -->