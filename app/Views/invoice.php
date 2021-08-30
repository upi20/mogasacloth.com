<style type="text/css">
	.garis{
		border:2px dashed #eee;
	}
</style>
<!-- <div  style="width: 100%;height:100%;background-image: url('<?= base_url ?>website/configuration/1610705126logo-bawang1.png');"></div> -->
<div>
	<div style="width: 100%;">
		<div style="text-align: center">
			<img src="https://mogasaclothing.infinit.id/website/configuration/1613372195logo-mogasa.png" width="200">
		</div>
		<br><br>
		<?php foreach($records as $q):?>
		<table style="width: 100%;">
			<tr>
				<td width="45%">
					<table>
						<tr>
							<td style="width: 40%;"><b>Nomor Invoice</b></td>
							<td style="width: 60%;">: <?=$q['check_invoice']?></td>
						</tr>
						<tr>
							<td><b>Nomor Resi</b></td>
							<td>: <?=$q['check_resi']?></td>
						</tr>
						<tr>
							<td><b>Tanggal</b></td>
							<td>: <?= date("d M Y", strtotime($q['tanggal']))?></td>
						</tr>
					</table>
				</td>
				<td width="55%">
					<table class="garis" width="100%">
						<tr>
							<td style="width: 20%;"><b>Pembeli</b></td>
							<td style="width: 80%;"></td>
						</tr>
						<tr style="background-color: #eee;">
							<td><b>Nama</b></td>
							<td>: <?=$q['user_name']?></td>
						</tr>						
						<tr>
							<td><b>Alamat</b></td>
							<td>: <?= $q['check_description'] ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<?php endforeach;?>
		<!-- <hr> --><br>
	</div>
	<!-- widget content -->
	<div class="widget-body">
		<table style="width: 100%;" class="garis">
			<tr style="background-color: #eee;">
				<td><b>Nama Produk</b></td>
				<td><b>Jumlah</b></td>
				<td><b>Harga Barang</b></td>
				<td><b>Subtoal</b></td>
			</tr>
			<?php $total_price = 0; ?>
			<?php foreach ($cart as $cart):?>
			<tr>

				<?php $total_price = (int)$total_price + (int)$cart['card_total_price'];  ?>

				<td><?= $cart['prod_name'] ?></td>
				<td><?= $cart['card_qty'] ?></td>
				<td><?= nominal(diskon($cart['prod_price'], $cart['prod_diskon'])) ?></td>
				<td><?= nominal($cart['card_total_price']) ?></td>
			</tr>
			<?php endforeach ?>
			<tr>
				<td colspan="3" style="height: 20px"></td>
				<td></td>
			</tr>
			<tr style="background-color: #eee;">
				<td colspan="3" ><b>Subtotal Harga Produk</b></td>
				<td><b><?= nominal($total_price) ?></b></td>
			</tr>
		</table>
		<br>
		<table style="width: 100%;">
			<tr>
				<td style="width: 40%"></td>
				<td>
					<table class="garis" style="width: 100%">
						<tr>
							<?php $total_pengiriman = 0; ?>
							<?php foreach($records as $q):?>
							<?php $total_pengiriman = (int)$total_pengiriman + (int)$q['checs_cost'];  ?>
							<td style="width: 68%"><?= $q['checs_service_name'] ?>, <?= $q['checs_aggent'] ?></td>
							<td style="width: 32%"><?= nominal($q['checs_cost']) ?></td>
							<?php endforeach; ?>
						</tr>
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
		<div><br><br><br><br><br>
			<div style="text-align: center">
				Terima Kasih telah berbelanja di Mogasa Cloth. Kepuasan anda adalah prioritas bagi kami. <br>
			</div>
			<br>
			<div class="garis" style="padding: 10px">
				Info<br><br>
				<table>
					<tr>
						<td>Email </td>
						<td>: admin@mogasacloth.com</td>
					</tr>
					<tr>
						<td>SMS/Telp </td>
						<td>: +62 813-1270-7356 (Official Mogasa Cloth)</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>: Perum D'Boqis Paniisan, Blok D No.19-22, RT.02/RW.11, Malakasari, Bandung, Jawa Barat 40376</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- end widget content -->