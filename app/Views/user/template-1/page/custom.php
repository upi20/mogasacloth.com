<?php 
	
	// PRODUCT FUNCTION
	use App\Models\Product;
	use App\Models\Category;
	use App\Liblaries\Pagination;

	// PRODUCT MODEL
	$product = new Product;

	// NUMBER PAGINATION
	if(isset($page_now))
	{
		$page_now = $page_now;
	}
	else
	{
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
	->where('cate_name','sablon')
	->paginate($offset, $no_of_record)
	->get();


	// CATEGORY PRODUCT
	$category = Category::all();


	// CREATE PAGINATION
	$pagination = Pagination::create_link($data_all, 16, [
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


		<div class="row isotope-grid">
			<!-- PRODUCT LIST -->
			<?php foreach($data as $r) : ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $r['cate_name'] ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0 label-new" data-label="<?= $r['prod_diskon'].'% OFF'?>">
			              <a href="<?= base_url ?>user/product-detail/<?= $r['prod_id'] ?>|<?= $r['prod_url'] ?>">
			                <img src="<?= base_url ?>catalog/product/<?= $r['prod_image'] ?>" alt="<?= $r['prod_name'] ?>">
			              </a>

			              <a href="<?= base_url ?>user/product-detail/<?= $r['prod_id'] ?>|<?= $r['prod_url'] ?>" class=" block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
			                  Detail Produk
			              </a>
			              <!-- <input readonly type="hidden" id="varian-product" value="4">
                            <input readonly type="hidden" id="num-product" value="1">
                            <input readonly type="hidden" id="size-product" value="1">
                          <button class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" onclick="addToCart(event, this)" prod-id="<?= $r['prod_id'] ?>" prod-name="<?= $r['prod_name'] ?>" num->
                              Add to cart
                          </button> -->
			            </div>

			            <div class="block2-txt flex-w flex-t p-t-14">
			              <div class="block2-txt-child1 flex-col-l ">
			                <a href="<?= base_url ?>user/product-detail/<?= $r['prod_id'] ?>|<?= $r['prod_url'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
			                  <?= $r['prod_name'] ?>
			                </a>

			                <p style="font-size: 20px">
			                  <?= nominal(diskon($r['prod_price'],$r['prod_diskon']))?>
			                  <br>
			                </p>

			                <span class="stext-105 cl3">
			                  <s>
			                    <?= nominal($r['prod_price']) ?>
			                  </s>
			                </span>
			              </div>

							<!-- <div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2" onclick="addWish(event, this)" prod-id="<?= $r['prod_id'] ?>" prod-name="<?= $r['prod_name'] ?>" prod-status="false">
									<img class="icon-heart1 dis-block trans-04" src="<?= base_url ?>assets/template-1/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?= base_url ?>assets/template-1/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div> -->
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