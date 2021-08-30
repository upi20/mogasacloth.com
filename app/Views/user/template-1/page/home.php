<?php 
  
  // PRODUCT FUNCTION
  use App\Models\Product;
  use App\Models\Category;
  use App\Models\Tutorial;


  //produk baru
  $product = new Product; 
  $baru = $product->select('*')
  ->leftJoin('category', 'prod_cate_id', 'cate_id')
  ->orderBy('prod_id','desc')
  ->limit('4')
  ->get();

  //produk populer
  $populer = $product->select('*')
  ->leftJoin('category', 'prod_cate_id', 'cate_id')
  ->orderBy('prod_views','desc')
  ->limit('8')
  ->get();

  // CATEGORY PRODUCT
  $category = Category::all();

  // Tutorial
  $tutorial = new Tutorial;
  $tutor = $tutorial->select('*')
  ->orderBy('tutr_id','desc')
  ->limit('2')
  ->get();
  
?>

<style type="text/css">
  .heading {
    text-align: center;
    color: #454343;
    font-size: 30px;
    font-weight: 700;
    position: relative;
    margin-bottom: 70px;
    text-transform: uppercase;
    z-index: 999;
}
.white-heading{
    color: #333;
}
.heading:after {
    content: ' ';
    position: absolute;
    top: 100%;
    left: 50%;
    height: 40px;
    width: 180px;
    border-radius: 4px;
    transform: translateX(-50%);
    background: url(img/heading-line.png);
    background-repeat: no-repeat;
    background-position: center;
}
.white-heading:after {
    /*background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);*/
    background-repeat: no-repeat;
    background-position: center;
}

.heading span {
    font-size: 18px;
    display: block;
    font-weight: 500;
}
.white-heading span {
    color: #ffffff;
}
/*-----Testimonial-------*/

.testimonial:after {
    position: absolute;
    top: -0 !important;
    left: 0;
    content: " ";
    /*background: url(img/testimonial.bg-top.png);*/
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
}

.testimonial {
    min-height: 375px;
    position: relative;
    /*background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg);*/
    padding-top: 50px;
    padding-bottom: 50px;
    background-position: center;
        background-size: cover;
}
#testimonial4 .carousel-inner:hover{
  cursor: -moz-grab;
  cursor: -webkit-grab;
}
#testimonial4 .carousel-inner:active{
  cursor: -moz-grabbing;
  cursor: -webkit-grabbing;
}
#testimonial4 .carousel-inner .item{
  overflow: hidden;
}

.testimonial4_indicators .carousel-indicators{
  left: 0;
  margin: 0;
  width: 100%;
  font-size: 0;
  height: 20px;
  bottom: 15px;
  padding: 0 5px;
  cursor: e-resize;
  overflow-x: auto;
  overflow-y: hidden;
  position: absolute;
  text-align: center;
  white-space: nowrap;
}
.testimonial4_indicators .carousel-indicators li{
  padding: 0;
  width: 14px;
  height: 14px;
  border: none;
  text-indent: 0;
  margin: 2px 3px;
  cursor: pointer;
  display: inline-block;
  background: #ffffff;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators .active{
  padding: 0;
  width: 14px;
  height: 14px;
  border: none;
  margin: 2px 3px;
  background-color: #9dd3af;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
  height: 3px;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
  background: #eeeeee;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.testimonial4_control_button .carousel-control{
  top: 175px;
  opacity: 1;
  width: 40px;
  bottom: auto;
  height: 40px;
  font-size: 10px;
  cursor: pointer;
  font-weight: 700;
  overflow: hidden;
  line-height: 38px;
  text-shadow: none;
  text-align: center;
  position: absolute;
  background: transparent;
  border: 2px solid #ffffff;
  text-transform: uppercase;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
  transition: all 0.6s cubic-bezier(0.3,1,0,1);
}
.testimonial4_control_button .carousel-control.left{
  left: 7%;
  top: 50%;
  right: auto;
}
.testimonial4_control_button .carousel-control.right{
  right: 7%;
  top: 50%;
  left: auto;
}
.testimonial4_control_button .carousel-control.left:hover,
.testimonial4_control_button .carousel-control.right:hover{
  color: #000;
  background: #fff;
  border: 2px solid #fff;
}

.testimonial4_header{
  top: 0;
  left: 0;
  bottom: 0;
  width: 550px;
  display: block;
  margin: 30px auto;
  text-align: center;
  position: relative;
}
.testimonial4_header h4{
  color: #333;
  font-size: 30px;
  font-weight: 600;
  position: relative;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.testimonial4_slide{
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 70%;
  margin: auto;
  padding: 20px;
  position: relative;
  text-align: center;
}
.testimonial4_slide img {
    top: 0;
    left: 0;
    right: 0;
    width: 136px;
    height: 136px;
    margin: auto;
    display: block;
    color: #f2f2f2;
    font-size: 18px;
    line-height: 46px;
    text-align: center;
    position: relative;
    border-radius: 50%;
    box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
}
.testimonial4_slide p {
    color: #333;
    font-size: 20px;
    line-height: 1.4;
    margin: 40px 0 20px 0;
}
.testimonial4_slide h4 {
  color: #333;
  font-size: 22px;
}

.testimonial .carousel {
  padding-bottom:50px;
}
.testimonial .carousel-control-next-icon, .testimonial .carousel-control-prev-icon {
    width: 35px;
    height: 35px;
}
/* ------testimonial  close-------*/
</style>

<!-- Category -->
  <div class="sec-banner bg0 p-t-95 p-b-55">
    <div class="container">
      <div class="row">
          <?php foreach ($category as $category):?>
        <div class="col-md-3 p-b-30">
          <!-- Block1 -->
          <div class="block1 wrap-pic-w">
            <img src="<?= base_url ?>catalog/category/<?= $category['cate_image'] ?>" style="filter: blur(1px);" alt="image">

            <a href="<?= base_url ?>user/product/list/category/<?= $category['cate_id'] ?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">

              <div class="block1-txt-child1 flex-col-l">
                  <span class="block1-name ltext-102 trans-04 p-b-8">
                      <?= $category['cate_name'] ?>
                  </span>

                  <span class="block1-info stext-102 trans-04">
                      New Trend
                  </span>
              </div>
              <div class="block1-txt-child2 p-b-4 trans-05">
                <div class="block1-link stext-101 cl0 trans-09">
                  Shop Now
                </div>
              </div>
            </a>
          </div>
        </div>

      <?php endforeach; ?>
      </div>
    </div>
  </div>

<!-- Product new -->
<br>
<section class="bg0 p-t-23 p-b-130"  id="produkku">
  <div class="container">
    <div class="p-b-1">
      <h3 class="ltext-103 cl5">
        Produk Terbaru
      </h3>
    </div>

    <div class="flex-w flex-sb-m p-b-52">
      
      <!-- Search product -->
      <div class="dis-none panel-search w-full p-t-10 p-b-15">
        <div class="bor8 dis-flex p-l-15">
          <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
            <i class="zmdi zmdi-search"></i>
          </button>

          <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
        </div>  
      </div>

      <!-- Filter -->
      <!-- TEMPLATE FILTER -->

    </div>

    <div class="row isotope-grid">
      <!-- PRODUCT LIST -->
      <?php foreach($baru as $r) : ?>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0 label-new" data-label="DISKON <?= $r['prod_diskon'].'%'?>">
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
                  <?= nominal(diskon($r['prod_price'],$r['prod_diskon']))?>
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
  </div>
</section>
<!-- produk new -->

<!-- Populer -->
<section class="bg0 p-t-23 p-b-20"  id="produkku">
  <div class="container">
    <div class="p-b-10">
      <h3 class="ltext-103 cl5">
        Produk Terpopuler
      </h3>
    </div>

    <div class="flex-w flex-sb-m p-b-52">
      
      <!-- Search product -->
      <div class="dis-none panel-search w-full p-t-10 p-b-15">
        <div class="bor8 dis-flex p-l-15">
          <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
            <i class="zmdi zmdi-search"></i>
          </button>

          <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
        </div>  
      </div>

      <!-- Filter -->
      <!-- TEMPLATE FILTER -->

    </div>

    <div class="row isotope-grid">
      <!-- PRODUCT Populer -->
      <?php foreach($populer as $r) : ?>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0 label-new" data-label="DISKON <?= $r['prod_diskon'].'%'?>">
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
                  <?= nominal(diskon($r['prod_price'],$r['prod_diskon']))?>
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
  </div>
</section>
<!-- Populer -->

