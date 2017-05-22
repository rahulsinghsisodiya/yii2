<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
        <!-- Page Loader -->
        <div id="pre-loader" class="loader-container">
            <div class="loader">
                <img src="images/svg/rings.svg" alt="loader">
            </div>
        </div>
        <div class="w1">
            <!-- mt header style4 start here -->
            <header id="mt-header" class="style4">
                <!-- mt bottom bar start here -->
                <div class="mt-bottom-bar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- mt logo start here -->
                                <div class="mt-logo"><a href="#"><img src="images/mt-logo.png" alt="schon"></a></div>
                                <!-- mt icon list start here -->
                                <ul class="mt-icon-list">
                                    <li class="hidden-lg hidden-md">
                                        <a href="#" class="bar-opener mobile-toggle">
                                            <span class="bar"></span>
                                            <span class="bar small"></span>
                                            <span class="bar"></span>
                                        </a>
                                    </li>
                                    <li><a href="#" class="icon-magnifier"></a></li>
                                    <li>
                                        <a href="#" class="bar-opener side-opener">
                                            <span class="bar"></span>
                                            <span class="bar small"></span>
                                            <span class="bar"></span>
                                        </a>
                                    </li>
                                </ul><!-- mt icon list end here -->
                                <!-- navigation start here -->
                                <nav id="nav">
                                    <ul>
                                        <li>
                                            <a class="drop-link" href="homepage1.html">HOME <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
                                            <div class="s-drop">
                                                <ul>
                                                    <li><a href="homepage1.html">Homepage1</a></li>
                                                    <li><a href="homepage2.html">homepage2</a></li>
                                                    <li><a href="homepage3.html">homepage3</a></li>
                                                    <li><a href="homepage4.html">homepage4</a></li>
                                                    <li><a href="homepage5.html">Homepage5</a></li>
                                                    <li><a href="homepage6.html">homepage6</a></li>
                                                    <li><a href="homepage7.html">homepage7</a></li>
                                                    <li><a href="homepage8.html">homepage8</a></li>
                                                    <li><a href="homepage9.html">homepage9</a></li>
                                                    <li><a href="homepage10.html">homepage10</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="product-grid-view.html">PRODUCTS</a></li>
                                        <li>
                                            <a class="drop-link" href="blog-right-sidebar.html">Blog <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
                                            <div class="s-drop">
                                                <ul>
                                                    <li><a href="blog-fullwidth-page.html">Blog Fullwidth Page</a></li>
                                                    <li><a href="blog-right-sidebar2.html">blog right sidebar2</a></li>
                                                    <li><a href="blog-postlist-3-masonry.html">blog postlist masonry</a></li>
                                                    <li><a href="blog-post-detail-sidebar.html">blog post detail sidebar</a></li>
                                                    <li><a href="blog-post-detail-full-width.html">blog post detail full width</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li>
                                            <a class="drop-link" href="contact-us.html">Contact <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
                                            <div class="s-drop">
                                                <ul>
                                                    <li><a href="contact-us.html">Contact</a></li>
                                                    <li><a href="contact-us2.html">Contact 2</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- mt icon list end here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mt bottom bar end here -->
                <span class="mt-side-over"></span>
            </header><!-- mt header style4 end here -->
            <!-- mt side menu start here -->
           
        </div><!-- W1 end here -->
<div class="wrap">
    

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
                <!-- Footer Holder of the Page -->
                <div class="footer-holder dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                                <!-- F Widget About of the Page -->
                                <div class="f-widget-about">
                                    <div class="logo">
                                        <a href="#"><img src="images/logo.png" alt="Schon"></a>
                                    </div>
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <!-- Social Network of the Page -->
                                    <ul class="list-unstyled social-network">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                    <!-- Social Network of the Page end -->
                                </div>
                                <!-- F Widget About of the Page end -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
                                <div class="f-widget-news">
                                    <h3 class="f-widget-heading">Twitter</h3>
                                    <div class="news-articles">
                                        <div class="news-column">
                                            <i class="fa fa-twitter"></i>
                                            <div class="txt-box">
                                                <p>Laboris nisi ut <a href="#">#schön</a> aliquip econse- <br>quat. <a href="#">https://t.co/vreNJ9nEDt</a></p>
                                            </div>
                                        </div>
                                        <div class="news-column">
                                            <i class="fa fa-twitter"></i>
                                            <div class="txt-box">
                                                <p>Ficia deserunt mollit anim id est labo- <br>rum. incididunt ut labore et dolore <br><a href="#">https://t.co/vreNJ9nEDt</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
                                <!-- Footer Tabs of the Page -->
                                <div class="f-widget-tabs">
                                    <h3 class="f-widget-heading">Product Tags</h3>
                                    <ul class="list-unstyled tabs">
                                        <li><a href="#">Sofas</a></li>
                                        <li><a href="#">Armchairs</a></li>
                                        <li><a href="#">Living</a></li>
                                        <li><a href="#">Bedroom</a></li>
                                        <li><a href="#">Lighting</a></li>
                                        <li><a href="#">Tables</a></li>
                                        <li><a href="#">Pouf</a></li>
                                        <li><a href="#">Wood</a></li>
                                        <li><a href="#">Office</a></li>
                                        <li><a href="#">Outdoor</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Stools</a></li>
                                        <li><a href="#">Footstools</a></li>
                                        <li><a href="#">Desks</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Tabs of the Page -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 text-right">
                                <!-- F Widget About of the Page -->
                                <div class="f-widget-about">
                                    <h3 class="f-widget-heading">Information</h3>
                                    <ul class="list-unstyled address-list align-right">
                                        <li><i class="fa fa-map-marker"></i><address>Connaugt Road Central Suite 18B, 148 <br>New Yankee</address></li>
                                        <li><i class="fa fa-phone"></i><a href="tel:15553332211">+1 (555) 333 22 11</a></li>
                                        <li><i class="fa fa-envelope-o"></i><a href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;">&#105;&#110;&#102;&#111;&#064;&#115;&#099;&#104;&#111;&#110;&#046;&#099;&#104;&#097;&#105;&#114;</a></li>
                                    </ul>
                                </div>
                                <!-- F Widget About of the Page end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Holder of the Page end -->
                <!-- Footer Area of the Page -->
                <div class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <p>© <a href="#">schön.</a> - All rights Reserved</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                                <div class="bank-card">
                                    <img src="images/bank-card.png" alt="bank-card">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Area of the Page end -->
            </footer><!-- footer of the Page end -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
