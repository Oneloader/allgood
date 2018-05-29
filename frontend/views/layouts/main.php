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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>泉佳光伏</title>

    <!-- 登陆CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

    <!--  -->

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/LOGO.jpg">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="home">
<?php $this->beginBody() ?>

<div class="wrap">
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= \yii\helpers\Url::to(['site/index'])?>"><img src="images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
<!--                        --><?php
//                        NavBar::begin([
//                            'brandLabel' => 'My Company',
//                            'brandUrl' => Yii::$app->homeUrl,
//                            'options' => [
//                                'class' => 'navbar-inverse navbar-fixed-top',
//                            ],
//                        ]);
//                        $menuItems = [
//                            ['label' => '首页', 'url' => ['/site/index']],
//                            ['label' => '关于', 'url' => ['/site/about']],
//                            ['label' => '详情', 'url' => ['/site/contact']],
//                        ];
//                        if (Yii::$app->user->isGuest) {
//                            $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
//                            $menuItems[] = ['label' => '登陆', 'url' => ['/site/login']];
//                        } else {
//                            $menuItems[] = '<li>'
//                                . Html::beginForm(['/site/logout'], 'post')
//                                . Html::submitButton(
//                                    '退出 (' . Yii::$app->user->identity->username . ')',
//                                    ['class' => 'scroll active navbar-nav navbar-right btn btn-link logout']
//                                )
//                                . Html::endForm()
//                                . '</li>';
//                        }
//                        echo Nav::widget([
//                            'options' => ['class' => 'scroll active navbar-nav navbar-right'],
//                            'items' => $menuItems,
//                        ]);
//                        NavBar::end();
//                        ?>
                        <li class="scroll active"><a href="#home" class="nav">首&emsp;页</a></li>
                        <li class="scroll"><a href="#features" style="text-decoration:none;" class="nav">未&emsp;来</a></li>
                        <li class="scroll"><a href="#services" class="nav">服&emsp;务</a></li>
                        <li class="scroll"><a href="#about" class="nav">关&emsp;于</a></li>
                        <li class="scroll"><a href="#pricing" class="nav">价&emsp;格</a></li>
                        <li class="scroll"><a href="#our-team" class="nav">团&emsp;队</a></li>
                    </ul>
                    <ul class="nav " style="list-style-type:none;float:right;">
                        <?php
                        if (empty(Yii::$app->user->identity->username)) {
                            echo '<li class="scroll"><a href="'.\yii\helpers\Url::to(['site/signup']).'">注册</a></li>';
                            echo '<li class="scroll"><a href="'.\yii\helpers\Url::to(['site/login']).'">登陆</a></li>';
                        }else{
                            echo '<li class="scroll"><a href="'.\yii\helpers\Url::to(['site/logout']).'">'.(Yii::$app->user->identity->username).'退出</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => 'My Company',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>

<!--    <div class="container">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->
</div>

<footer class="footer" id="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
        <div class="row">
            <div class="col-sm-6">Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
            <div class="col-sm-6">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
<!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom-scripts.js"></script>
<!-- 登陆页面sctipt -->
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script>
    $(function () {
        $('.nav').on('click', function() {
            $('.nav').parent().removeClass('active');
            $(this).parent().addClass('active');
        });
    });
    $(function() {
        $(".zoomIn").hover(function(){
            $("#pp").addClass("featured");
        })
    }
</script>


</html>
<?php $this->endPage() ?>
