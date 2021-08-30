<style type="text/css">
	.garis{
		border:2px dashed #eee;
	}
</style>

<div>
	<div style="width: 100%;">
		<div style="text-align: center">
			<img src="<?= base_url ?>website/configuration/1613372195logo-mogasa.png" width="300">
		</div>
		<?php foreach($records as $q):?>
		<table>
			<tr>
				<td>
					<table>
						<tr>
							<td><b>Nomor Transaksi</b></td>
							<td></td>
							<td>: <?=$q['check_code']?></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Nomor Invoice</b></td>
							<td></td>
							<td>: <?=$q['check_invoice']?></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Nomor Resi</b></td>
							<td></td>
							<td>: <?=$q['check_resi']?></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><b>Pengirim</b></td>
							<td></td>
							<td>: Mogasacloth</td>
							<td></td>
							<td></td>
						</tr>  
						<tr>
							<td><b>Tanggal</b></td>
							<td></td>
							<td>: <?= date("d M Y", strtotime($q['created_at']))?></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>
								<b>Alamat:</b>
							</td>
						</tr>
						<tr>
							<td><b>Alamat Pembeli</b></td>
						</tr>
						<tr>
							<td>
								<?= $q['check_description'] ?>, A.n <?=$q['user_name']?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<?php endforeach;?>
		<hr>
	</div>
	<!-- widget content -->
	<div class="widget-body">

		<!-- <table style="width: 100%;" class="garis">
			<tr style="background-color: #eee;">
				<td><b>Nama Produk</b></td>
				<td><b>Jumlah</b></td>
				<td><b>Berat</b></td>
				<td><b>Harga Barang</b></td>
				<td><b>Subtoal</b></td>
			</tr>
			<tr>
				<?php $total_price = 0; ?>
				<?php foreach ($cart as $cart):?>

				<?php $total_price = (int)$total_price + (int)$cart['card_total_price'];  ?>

				<td><?= $cart['prod_name'] ?></td>
				<td><?= $cart['card_qty'] ?></td>
				<td>250 gram</td>
				<td><?= nominal(diskon($cart['prod_price'], $cart['prod_diskon'])) ?></td>
				<td><?= nominal($cart['card_total_price']) ?></td>
				<?php endforeach ?>
			</tr>
			<tr>
				<td colspan="4" style="height: 20px"></td>
				<td></td>
			</tr>
			<tr style="background-color: #eee;">
				<td colspan="4" style="text-align: right"><b>Subtotal Harga Produk</b></td>
				<td><b><?= nominal($total_price) ?></b></td>
			</tr>
		</table> -->
		<br>
		<table style="width: 100%;">
			<tr>
				<td style="width: 40%"></td>
				<td>
					<table class="garis" style="width: 100%">
						<<!-- tr>
							<?php $total_pengiriman = 0; ?>
							<?php foreach($records as $q):?>
							<?php $total_pengiriman = (int)$total_pengiriman + (int)$q['checs_cost'];  ?>
							<td style="width: 68%"><?= $q['checs_service_name'] ?>, <?= $q['checs_aggent'] ?></td>
							<td style="width: 32%"><?= nominal($q['checs_cost']) ?></td>
							<?php endforeach; ?>
						</tr> -->
						<tr style="background-color: #eee;">
							<td><b>Subtotal Pengiriman</b></td>
							<td><b><?= nominal($total_pengiriman) ?></b></td>
						</tr>
					</table>
				</td>
			</tr>
			<br>
			<tr>
				<td style="width: 40%"></td>
				<td>
					<table class="garis" style="width: 100%">
						<tr style="background-color: #eee;">
							<td style="width: 68%"><b>Total Pembayaran</b></td>
							<?php $total_pembayaran = (int)$total_pengiriman + (int)$total_price ?>
							<td style="width: 32%"><b><?= nominal($total_pembayaran) ?></b></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>
<!-- end widget content -->