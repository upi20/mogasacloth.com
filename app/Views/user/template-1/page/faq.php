<?php 

	// faq Model
	use App\Models\Faq;

	$faq = new Faq;

	$faq = $faq->select('*')
	->orderBy('faq_id','desc')
	->get();


 ?>


<style type="text/css">
	@media(max-width: 500px){
		.coba{
			text-align: center;
		}
	}

	.warna{
		color: #ffde17;
	}

</style>

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


<!-- FAQ -->
<section class="bg0 p-t-75 p-b-120">
	<div class="container">
		<div class="row p-b-50">
			<div class="col-md-12 text-center">
				<h3 class="mtext-111 cl2 p-b-16">
					FREQUENTLY ASKED QUESTIONS
				</h3>
			</div>
			<div class="col-11 col-md-5 col-lg-4 m-lr-auto text-center">
				<div class="">
					<div class="hov-img0">
						<i class="fa fa-question" style="padding: 30px;font-size: 80px;background-color: #9a0f1c;color:white;border-radius: 20px;"></i>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-lg-8">
				<?php foreach ($faq as $faq):?>
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<br>
						<p class="warna"><?= $faq['faq_question'] ?></p><br>
						<p>
							<?= $faq['faq_answer']  ?>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>