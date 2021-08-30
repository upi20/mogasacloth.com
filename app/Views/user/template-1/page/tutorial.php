<?php

	// PRODUCT FUNCTION
	use App\Models\Tutorial;

	// Tutorial
  	$tutorial = new Tutorial;
  	$tutor = $tutorial->select('*')
  	->orderBy('tutr_id','desc')
 	->limit('2')
  	->get();
	
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

<!-- tutorial -->
<section class="bg0 p-b-130"  id="produkku">
  <div class="container">
    <div class="row isotope-grid">
      <!-- Tutorial -->
      <?php foreach ($tutor as $tutor): ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-b-35 isotope-item">
          <div class="block2">
            <div class="block2-pic hov-img0">
              <iframe width="560" height="315" src="<?= $tutor['tutr_link'] ?>" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <h4><?= $tutor['tutr_name'] ?></h4>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      <!-- # Tutorial LIST -->
    </div>
  </div>
</section>