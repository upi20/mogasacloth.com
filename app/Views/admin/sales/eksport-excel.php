<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename={$unique_id}{$title}.xls");
?>

<div style="width: 100%">
	<h2><strong><?= $title ?></strong></h2>
	<p>Perum D'Boqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376</p>
	<hr>
</div>

<!-- widget content -->
<div class="widget-body">

	<h1></h1>

	<table class="table table-striped table-bordered table-hover" width="100%" border="1">
		<thead>			                
			<tr>
				<th data-class="expand"><i class="fa fa-fw fa-info-circle text-muted hidden-md hidden-sm hidden-xs"></i> Code</th>
				<th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
				<!-- <th data-hide="phone"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Account Number</th> -->
				<th data-hide="phone"><i class="fa fa-fw fa-money text-muted hidden-md hidden-sm hidden-xs"></i> Total</th>
				<th data-hide="phone"><i class="fa fa-fw fa-credit-card text-muted hidden-md hidden-sm hidden-xs"></i> Payment Type</th>
				<th data-hide="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Bank Type</th>
				<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Fraud Status</th>
				<th data-hide="phone"><i class="fa fa-fw fa-star-half-o text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($records as $q):?>
			<tr data-id="<?= $q['check_id'] ?>">
				<td><?=$q['check_code']?></td>
				<td><?=$q['user_name']?></td>
				<?php if($q['checp_type'] == 'manual') : ?>
					<!-- <td><?=$q['checp_account_number']?></td> -->
				<?php else : ?>
					<td><?=$q['checp_va_number']?></td>
				<?php endif; ?>
				<td><?=nominal($q['checp_gross_amount'])?></td>
				<td><?=$q['checp_payment_type']?></td>
				<td><?=$q['checp_bank']?></td>
				<td><?=$q['checp_fraud_status']?></td>
				<td><?=$q['check_status_value']?></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>	
</div>
<!-- end widget content -->