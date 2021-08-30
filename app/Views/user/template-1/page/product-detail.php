<?php  
	
	use App\Models\Category;
	use App\Models\Color;
	use App\Models\Size;
	// use App\Models\Tags;

	// CATEGORY NAME
	$category = Category::find([
		'cate_id' => $product['prod_cate_id']
	])->fetch_assoc();


	// SIZE LIST
	$size = new Size;
	$size = $size->select('*')
	->where('size_category_id' ,$product['prod_cate_id'])
	->get();

?>

<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="<?= base_url ?>" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<a href="<?= base_url ?>user/product-list" class="stext-109 cl8 hov-cl1 trans-04">
			Product
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<span class="stext-109 cl4">
			<?= $product['prod_name'] ?>
		</span>
	</div>
</div>
	

<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="<?= base_url ?>catalog/product/<?= $product['prod_image'] ?>">
								<div class="wrap-pic-w pos-relative">
									<img src="<?= base_url ?>catalog/product/<?= $product['prod_image'] ?>" alt="<?= $product['prod_name'] ?>">

									<a class="flex-c-m size-102 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04">
										<span>DISKON <?= $product['prod_diskon']?>% </span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						<?= $product['prod_name'] ?>
					</h4>

					<span class="mtext-106 cl2"  style="font-size: 30px">
					<?= nominal(diskon($product['prod_price'],$product['prod_diskon']))?>
					</span>
					<span class="mtext-106 cl2">
						<s>
							<?= nominal($product['prod_price']) ?>
						</s>
					</span>

						<p class="stext-102 cl3 p-t-12">
							Stok : <?= $product['prod_stok'] ?>
						</p>

						<p class="stext-102 cl3 p-t-12">
							Berat :
							<?= $product['prod_keyword'] ?>
						</p>

					<p class="stext-102 cl3 p-t-23">
						Produk Detail :<br>
						<?= $product['prod_description'] ?>
					</p>

					<div class="p-t-33">
						<div class="flex-w flex-r-m p-b-10">
							<div class="size-203 flex-c-m respon6">
								Pilih Ukuran
							</div>

							<div class="size-204 respon6-next">
								<div class="rs1-select2 bor8 bg0">
									<select class="js-select2" id="size-product">
										<option disabled>Choose an option</option>
										<?php foreach($size as $v) : ?>
											<option value="<?= $v['size_id'] ?>"><?= $v['size_name'] ?></option>
										<?php endforeach ?>
									</select>
									<div class="dropDownSelect2"></div>
								</div>
							</div>
						</div>
						<div class="flex-w flex-r-m p-b-10">
							<div class="size-203 flex-c-m respon6">
								Jumlah
							</div>

							<div class="size-204 respon6-next">
								<div class="wrap-num-product flex-w m-r-20 m-tb-10">
									<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-minus"></i>
									</div>

									<input class="mtext-104 cl3 txt-center num-product" readonly type="number" id="num-product" value="1">

									<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-plus"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="flex-w flex-r-m p-b-10">

							<div class="size-204 flex-w flex-m respon6-next">
								<input readonly type="hidden" id="varian-product" value="1">
								<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" onclick="addToCart(event, this)" prod-id="<?= $product['prod_id'] ?>" prod-name="<?= $product['prod_name'] ?>">
									Add to cart
								</button>
							</div>
						</div>	
					</div>

					
				</div>
			</div>
		</div>

		
	</div>

	<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
		<!-- <span class="stext-107 cl6 p-lr-25">
			SKU: JAK-01
		</span> -->

		<span class="stext-107 cl6 p-lr-25">
			Kategori : <?= $category['cate_name'] ?>
		</span>
	</div>
</section>


<!-- Related Products -->
<!-- TEMPLATE RELATED PRODUCTS -->
