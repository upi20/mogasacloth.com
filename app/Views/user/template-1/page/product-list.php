	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1246171752445179');
		fbq('track', 'PageView');
		fbq('track', 'Purchase');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1246171752445179&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

	<?php

	// PRODUCT FUNCTION
	use App\Models\Product;
	use App\Models\Category;
	use App\Liblaries\Pagination;

	// PRODUCT MODEL
	$product = new Product;

	// NUMBER PAGINATION
	if (isset($page_now)) {
		$page_now = $page_now;
	} else {
		$page_now = 1;
	}

	// PAGINATION
	$no_of_record = 16;
	$offset = ((int)$page_now - 1) * (int)$no_of_record;

	// ALL DATA PRODUCT
	$data_all = $product->all();
	$data_all = $data_all->num_rows;

	// DATA PAGINATE
	$data = $product->select('*')
		->leftJoin('category', 'prod_cate_id', 'cate_id')
		->paginate($offset, $no_of_record)
		->get();


	// CATEGORY PRODUCT
	$category = Category::all();


	// CREATE PAGINATION
	$pagination = Pagination::create_link($data_all, 12, [
		'href' => base_url . 'user/product/list/paginate',
		'page_now' => $page_now,
		'ul_class' => 'pagination justify-content-center',
		'li_class' => 'page-item',
		'anchor_class' => 'page-link',
	]);

	?>

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

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">

			<!-- CATEGORI -->
			<h3>KATEGORI PRODUK</h3>
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter="*">
						Semua
					</button>

					<?php foreach ($category as $category) : ?>

						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?= $category['cate_id'] ?>">
							<?= $category['cate_name'] ?>
						</button>

					<?php endforeach; ?>

				</div>
			</div>

			<div class="row isotope-grid">
				<!-- PRODUCT LIST -->
				<?php foreach ($data as $r) : ?>
					<div class="col-6 col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $r['cate_id'] ?>">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0 label-new" data-label="DISKON <?= $r['prod_diskon'] . '%' ?>">
								<a href="<?= base_url ?>user/product-detail/<?= $r['prod_id'] ?>|<?= $r['prod_url'] ?>">
									<img src="<?= base_url ?>catalog/product/<?= $r['prod_image'] ?>" alt="<?= $r['prod_name'] ?>">
								</a>

								<a href="<?= base_url ?>user/product-detail/<?= $r['prod_id'] ?>|<?= $r['prod_url'] ?>" class=" block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									Detail Produk
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="<?= base_url ?>user/product-detail/<?= $r['prod_id'] ?>|<?= $r['prod_url'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?= $r['prod_name'] ?>
									</a>

									<p style="font-size: 20px">
										<?= nominal(diskon($r['prod_price'], $r['prod_diskon'])) ?>
										<br>
									</p>

									<span class="stext-105 cl3">
										<s>
											<?= nominal($r['prod_price']) ?>
										</s>
									</span>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<!-- # PRODUCT LIST -->
			</div>

			<!-- Load More -->
			<div class="flex-c-m flex-w w-full p-t-38">
				<nav aria-label="Page navigation example">
					<?= $pagination ?>
				</nav>
			</div>

		</div>
	</section>