<?php  
	use App\Models\Category;
	use App\Models\Blog;

	$category = Category::all();
	$blog = new Blog; 
	$blog_data = $blog->select('*, blog.*')
	->leftJoin('category', 'category.cate_id', 'blog.blog_cate_id')
	->leftJoin('user', 'user.user_id', 'blog.bolg_user_id')
	->get();
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

<!-- Blog -->
<section class="bg0 p-t-62 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12 p-b-80">
				<div class="p-r-45 p-r-0-lg row">
					<!-- item blog -->

					<?php foreach($blog_data as $b) : ?>

						<div class="col-md-6 col-lg-6">

						<div class="p-b-63">
							<div class="row">
								<div class="col-md-4 col-lg-4 col-xs-4">
									<a href="<?= base_url ?>blog-detail?id=<?= $b['blog_id'] ?>" class="hov-img0 how-pos5-parent" style="margin-top: 40px">
										<img src="<?= base_url ?>website/blog/<?= $b['blog_thumbnal'] ?>">
									</a>
								</div>
								<div class="col-md-8 col-lg-8 col-xs-8">
									<div class="p-t-32">
										<h6 class="">
											<a href="<?= base_url ?>blog-detail?id=<?= $b['blog_id'] ?>" class="ltext-108 cl2 hov-cl1 trans-04">
												<?= substr($b['blog_title'], 0, 20)?>
											</a>
										</h6>

										<p class="cl6">
											<?= substr($b['blog_content'], 0, 100) . ' ...' ?>
										</p>

										<div class="flex-w flex-sb-m ">
											<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
												<span>
													<span class="cl4">By</span> <?= $b['user_name'] ?>  
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>
												<span>
													<?= date_text($b['created_at']) ?>
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					
						</div>

					<?php endforeach; ?>

					<!-- Pagination -->
				</div>
			</div>
		</div>
	</div>
</section>	