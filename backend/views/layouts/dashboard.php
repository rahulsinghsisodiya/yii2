<?php

/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\widgets\ActiveForm;



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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>
<body>
<?php $this->beginBody() ?>
<?php LoginAsset::register($this);?>
<div class="wrapper">
    
      <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo Yii::getAlias('@web').'/images/sidebar-4.jpg' ?>">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin Panel
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    Admin
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <?= Html::img('@web/images/faces/marc.jpg'); ?>
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                           <?php echo Yii::$app->user->identity->username; ?>
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">My Profile</a>
                                </li>
                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li>
                        <?= Html::a("<i class='material-icons'>dashboard</i>".Yii::t('app','dashboard'), ['/site/index'], ['class'=>'', 'style' => '']) ?>
                    </li>
                     <li>
                        <a data-toggle="collapse" href="#bannerExamples">
                            <i class="material-icons">image</i>
                            <p>Banner
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div  id="bannerExamples" class="collapse" aria-expanded="" >
                            <ul class="nav banner">
                                <li class="create">
                                    <?= Html::a('Add Banner', ['/banner/create'], ['class' => '']) ?>
                                </li>
                                <li class="index">
                                   <?= Html::a('List Banner', ['/banner'], ['class' => '']) ?>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#categoryExamples">
                            <i class="material-icons">image</i>
                            <p>Category
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div  id="categoryExamples" class="collapse" aria-expanded="" >
                            <ul class="nav banner">
                                <li class="create">
                                    <?= Html::a('Add Category', ['/category/create'], ['class' => '']) ?>
                                </li>
                                <li class="index">
                                   <?= Html::a('List Category', ['/category'], ['class' => '']) ?>
                                </li>

                            </ul>
                        </div>
                    </li> 
                    <li>
                        <a data-toggle="collapse" href="#productExamples">
                            <i class="material-icons">image</i>
                            <p>Product
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div  id="productExamples" class="collapse" aria-expanded="" >
                            <ul class="nav banner">
                                <li class="create">
                                    <?= Html::a('Add Product', ['/product/create'], ['class' => '']) ?>
                                </li>
                                <li class="index">
                                   <?= Html::a('List Product', ['/product'], ['class' => '']) ?>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#productoptionExamples">
                            <i class="material-icons">image</i>
                            <p>Product Options
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div  id="productoptionExamples" class="collapse" aria-expanded="" >
                            <ul class="nav banner">
                                <li class="create">
                                    <?= Html::a('Add Option', ['/product-options/create'], ['class' => '']) ?>
                                </li>
                                <li class="index">
                                   <?= Html::a('List Option', ['/product-options'], ['class' => '']) ?>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>

    <div class="main-panel">
          <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?= Html::a("dashboard", ['/site/index'], ['class'=>'navbar-brand']) ?>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?= Html::a("<i class='material-icons'>dashboard</i>", ['/site/index']) ?>
                            </li>
                            <li>
                                 <?php  echo Html::beginForm(['/site/logout'], 'post');?>
                                 <?php  echo  Html::submitButton(
                                        '<i class="material-icons">power_settings_new</i>',
                                        ['class' => 'logout_button']
                                    );?>
                                  <?php  echo  Html::endForm();?>
                                   
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        <?= $content ?>
         <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
    </div>
</div>
<div id="blog"></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("beforeSubmit", "#my-form-id", function () {
            // send data to actionSave by ajax request.
            //alert("xcxc");
            return false; // Cancel form submitting.
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#changerole',function(){
            var id = $(this).val();
           var base_url = '<?php echo Yii::$app->urlManager->createUrl(['permissionassign/permissiondata']) ?>';
             $.ajax({
                    type: "POST",
                    url: base_url,
                    //data: "orderby=" + sortdata+ "status=" + status,
                    data: ({selectid: id}),
                    dataType: "json",
                    cache: false,
                    success: function(data) {
                 // $("#response_message_view").html(response_data);
                    if(data==null){

                  $("#product_type").empty();   

             }else{
                  var obj = eval(data);
                  $("#department-branch_fk_id").empty();
                  $("#department-branch_fk_id").append("<option value=''> Select Branch</option>");
                  $.each(obj, function(key, value) {
                     $("#department-branch_fk_id").append("<option value="+key+">"+value+"</option>");
                  });
             }
                    }
                    })

        });
    });
</script>