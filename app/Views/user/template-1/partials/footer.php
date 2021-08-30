<?php 
	
	// PRODUCT FUNCTION
	use App\Models\Category;


	// CATEGORY PRODUCT
	$category = Category::all();

	
?>

<footer class="bg3 p-t-75">
	<div class="container">
		<div class="row">

			<div class="col-sm-6 col-lg-4 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Info
				</h4>
				<p class="stext-107 cl7 size-201">
					<span><i class="fa fa-map-marker "></i></span>
					<?= $website['web_addres'] ?>
				</p>
				<p class="stext-107 cl7 size-201">
					<span><i class="fa fa-whatsapp"></i></span>
					+62 813-1270-7356
				</p>
				<p class="stext-107 cl7 size-201">
					<span><i class="fa fa-instagram"></i></span>
					mgs_cloth
				</p>
				<p class="stext-107 cl7 size-201">
					<span><i class="fa fa-envelope-open-o"></i></span>
					admin@mogasacloth.com
				</p>
			</div>

			<div class="col-sm-6 col-lg-2 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Bantuan
				</h4>

				<ul>
					<li class="p-b-10">
						<a href="<?= base_url ?>user/tracking" class="stext-107 cl7 hov-cl1 trans-04">
							Cek Pesanan
						</a>
					</li>

					<li class="p-b-10">
						<a href="<?= base_url ?>user/how-order" class="stext-107 cl7 hov-cl1 trans-04">
							Cara Pemesanan 
						</a>
					</li>

					<li class="p-b-10">
						<a href="<?= base_url ?>user/faq" class="stext-107 cl7 hov-cl1 trans-04">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="col-sm-6 col-lg-2 p-b-50">
				<h4 class="stext-301 cl0 p-b-30">
					Kategori
				</h4>

				<ul>
					<!-- category -->
					<?php foreach ($category as $category): ?>

					<li class="p-b-10">
						<a href="<?= base_url ?>user/product-list" class="stext-107 cl7 hov-cl1 trans-04">
							<?= $category['cate_name'] ?>
						</a>
					</li>

					<?php endforeach ?>
					<!-- category -->
				</ul>
			</div>

			<div class="col-sm-6 col-lg-4 p-b-50">
				<h4 class="stext-301 cl0">
					Metode Pembayaran
				</h4>
				<img src="<?= base_url ?>website/configuration/<?= $website['web_payment_method'] ?>" alt="bank" height="70">
				<h4 class="stext-301 cl0">
					Jasa Pengantar
				</h4>
				<img src="<?= base_url ?>website/configuration/<?= $website['web_delivery_service'] ?>" alt="bank" height="70">
			</div>
		</div>
	</div>
	<div class="p-t-40 p-b-18">
		<p class="stext-107 cl7 txt-center">
			Powered by <?= $website['web_copyright'] ?> &copy; <script>document.write(new Date().getFullYear());</script>
		</p>
	</div>
</footer>