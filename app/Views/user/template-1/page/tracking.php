<?php

	
	
?>

<style type="text/css">
	@media(max-width: 500px){
		.gambar{
			width: 100%;
		}
		.coba{
			text-align: center;
		}
	}
	@media(min-width: 500px){
		.gambar{
			width: 100%;
		}
	}

	.warna{
		color: #ffde17;
	}
	.kotak{
		border: 2px #eee solid;
		padding: 10px;
	}

</style>

<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="<?= base_url ?>" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<span class="stext-109 cl4">
			<?= $title ?>
		</span>
	</div>
</div>

<!-- My account -->
<section class="bg0 p-t-104 p-b-116">
	<div class="container">
		<form id="form-cek-resi">
			<h4>Cek Nomor Resi</h4>
			<hr>
			<div class="row">
				<div class="col-md-6 p-t-20">
					<input class="form-control" type="text" id="no_resi" placeholder="Masukan Nomor Resi" autocomplete="off" required>
				</div>
				<div class="col-md-6 p-t-20">
					<select class="form-control" id="courier">
						<option disabled selected>Pilih Kurir...</option>
						<option value="jne">JNE</option>
                        <option value="tiki">TIKI</option>
						<option value="pos">POS INDONESIA</option>
	                    <option value="jnt">JNT</option>
	                    <option value="jet">JET</option>
	                    <option value="ninja">NINJA EXPRESS</option>
	                    <option value="lion">LION PARCEL</option>
	                    <option value="sap">SAP EXPRESS</option>
	                    <option value="sicepat">SICEPAT</option>
					</select>
					<div class="dropDownSelect2"></div>
				</div>
				<div class="col-md-12 p-t-20" style="text-align: center">
					<button type="submit" class="block2-btn flex-c-m stext-101 cl0 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" style="width: 20%;height: 40px">
						Cari
					</button>
				</div>
			</div>
		</form>
		<br><br><br>
		<div class="row" style="padding: 20px" id="tampil_resi">
			
		</div>
	</div>
</section>