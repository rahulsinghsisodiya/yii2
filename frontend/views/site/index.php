<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$path  = Yii::$app->urlManager->createUrl('backend/web/images/banner/4vco2JHKz6.jpeg');
?>
</div>
<div class="mt-main-slider">
                <!-- slider banner-slider start here -->
                <div class="slider banner-slider">
                    <!-- holder start here -->
                    <?php 
                    if(!empty($dataValues['banner'])){
                        foreach ($dataValues['banner'] as $key => $value) {
                           if(!empty($value->banner_image)){
                            $imagepath = Yii::$app->urlManager->createUrl('backend/web/'.$value->banner_image);
                           }else{
                                $imagepath = '';
                           }
                        
                    ?>
                    <div class="holder text-center" style="background-image: url(<?php echo $imagepath; ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="text left">
                                        <strong class="title">FURNITURE DESIGNS IDEAS</strong>
                                        <h1>LIGHTING</h1>
                                        <h2>PENDANT LAMPS</h2>
                                        <div class="txt">
                                            <p>Consectetur adipisicing elit. Beatae accusamus, optio, repellendus inventore</p>
                                        </div>
                                        <a href="product-detail.html" class="shop">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- holder end here -->
                    <?php } }?>
                </div>
                <!-- slider regular end here -->
            </div><!-- mt main slider end here -->
    <main id="mt-main">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- banner frame start here -->
                            <div class="banner-frame">
                                <!-- banner-1 start here -->
                                <div class="banner-1 wow fadeInLeft" data-wow-delay="0.4s">
                                    <?= Html::img('images/banner/img01.jpg');?>
                                   
                                </div>
                                <!-- banner-1 end here -->

                                <!-- banner-box first start here -->
                                <div class="banner-box first">
                                    <!-- banner-2 start here -->
                                    <div class="banner-2 wow fadeInUp" data-wow-delay="0.4s">
                                         <?= Html::img('images/banner/img02.jpg');?>
                                   
                                        <div class="holder">
                                            <h2>MODULAR LOUNGE <br>TEAK</h2>
                                            <span class="price">$ 129.00</span>
                                        </div>
                                    </div>
                                    <!-- banner-2 end here -->

                                    <!-- banner-3 start here -->
                                    <div class="banner-3 right wow fadeInDown" data-wow-delay="0.4s">
                                         <?= Html::img('images/banner/img03.jpg');?>
                                   
                                        <div class="holder">
                                            <h2>Modular technical <br>fabric sofa</h2>
                                            <a href="product-detail.html" class="shop">SHOP NOW</a>
                                        </div>
                                    </div>
                                    <!-- banner-3 end here -->
                                </div>
                                
                                <div class="banner-4 hidden-sm wow fadeInRight" data-wow-delay="0.4s">
                                     <?= Html::img('images/banner/img04.jpg');?>
                                   <div class="holder">
                                        <h2>Direct light <br>pendant lamp</h2>
                                        <span class="price">$ 129.00</span>
                                        <a class="btn-shop add" href="product-detail.html">
                                            <span>shop now</span>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- banner-4 end here -->
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- mt bestseller start here -->
                <div class="mt-bestseller bg-grey text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 mt-heading text-uppercase">
                                <h2 class="heading">BEST SELLER</h2>
                                <p>EXCEPTEUR SINT OCCAECAT</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bestseller-slider">
                                    <?php 
                    if(!empty($dataValues['product'])){
                        foreach ($dataValues['product'] as $key => $value) {
                           if(!empty($value->product_image)){
                            $imagepath = Yii::$app->urlManager->createUrl('backend/web/'.$value->product_image);
                           }else{
                                $imagepath = '';
                           }
                        
                    ?>
                                    <div class="slide">
                                        <!-- mt product1 center start here -->
                                        <div class="mt-product1 large">
                                            <div class="box">
                                                <div class="b1">
                                                    <div class="b2">
                                                        <a href="product-detail.html"><img src="<?php echo $imagepath; ?>" alt="image description"></a>
                                                        <span class="caption">
                                                            <span class="best-price">Best Price</span>
                                                        </span>
                                                        <ul class="links add">
                                                            <li><a href="#"><i class="icon-handbag"></i></a></li>
                                                            <li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
                                                            <li><a href="#popup1" class="lightbox"><i class="icomoon icon-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="txt">
                                                <strong class="title"><a href="product-detail.html"><?php echo $value->product_name ?></a></strong>
                                                <span class="price"><i class="fa fa-eur"></i> <span><?php echo $value->product_price ?></span></span>
                                            </div>
                                        </div><!-- mt product1 center end here -->
                                    </div>
                                    <?php } }?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mt bestseller start here -->
                <div class="mt-smallproducts">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm wow fadeInLeft" data-wow-delay="0.4s">
                                <h3 class="heading">Hot Sale</h3>
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img14.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Egon Wooden Chair</a></strong>
                                            <ul class="mt-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img15.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img16.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Kurve Chair</a></strong>
                                            <ul class="mt-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm wow fadeInLeft" data-wow-delay="0.4s">
                                <h3 class="heading">Featured Products</h3>
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img17.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Bombi Chair</a></strong>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$33,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img18.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
                                        </div>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img19.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Puff Chair</a></strong>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs wow fadeInRight" data-wow-delay="0.4s">
                                <h3 class="heading">Sale Products</h3>
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img20.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Marvelous Wooden Chair</a></strong>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img21.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
                                            <ul class="mt-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img16.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Kurve Chair</a></strong>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight" data-wow-delay="0.4s">
                                <h3 class="heading">Top Rated Products</h3>
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img14.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Egon Wooden Chair</a></strong>
                                            <ul class="mt-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img15.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
                                            <ul class="mt-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                                <!-- mt product4 start here -->
                                <div class="mt-product4 mt-paddingbottom20">
                                    <div class="img">
                                        <a href="product-detail.html"><img alt="image description" src="images/products/img16.jpg"></a>
                                    </div>
                                    <div class="text">
                                        <div class="frame">
                                            <strong><a href="product-detail.html">Kurve Chair</a></strong>
                                            <ul class="mt-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <del class="off">$75,00</del>
                                        <span class="price">$55,00</span>
                                    </div>
                                </div><!-- mt product4 end here -->
                            </div>
                        </div>
                    </div>
                </div><!-- mt bestseller end here -->
            </main><!-- mt main end here -->