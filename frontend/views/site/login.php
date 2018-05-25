<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<style>
    .mb-5{
        margin-bottom: 3rem!important;
    }
    body {
        font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        font-size: 24px;
        font-weight: 300;
        overflow-x: hidden;
    }

    .ml-auto{
        margin-left: auto!important;
    }

    #body{
        width: 50%;
    }
</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Letter - Simple Sign Up Form</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <link rel="stylesheet" href="../css/demo.css" />
        <link rel="stylesheet" href="../css/templatemo-style.css">

        <script type="text/javascript" src="../js/modernizr.custom.86080.js"></script>

    </head>

    <body>

        <div id="particles-js"></div>

        <ul class="cb-slideshow">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <div class="container-fluid">
            <div class="row cb-slideshow-text-container ">
                <div class= "tm-content col-xl-6 col-sm-8 col-xs-8 ml-auto section" id="body">
                    <header class="mb-5"><h1>登陆</h1></header>
                    <P class="mb-5">欢迎进入</P>

                    <form action="<?= \yii\helpers\Url::to(['site/login'])?>" method="post" class="subscribe-form">
                        <div class="row form-section">

                            <?php $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'options' => ['class' => 'form-control', 'id' => 'contact_email','placeholder'=>0],
                            ]); ?>

                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <?= $form->field($model, 'username',['labelOptions' => ['class' => 'form-control','id'=>'contact_email']])->textInput(['autofocus' => true,'placeholder'=>"用户名",'required'=>'required'])->label(false) ?>

                                <?= $form->field($model, 'password',['labelOptions' => ['class' => 'form-control','id'=>'contact_email']])->passwordInput(['placeholder'=>"密码",'required'=>'required'])->label(false) ?>

                                <div style="font-size: small">
                                    <?= $form->field($model, 'rememberMe',['labelOptions' => ['label'=>'记住密码','class' => 'form-control','id'=>'contact_email']])->checkbox() ?>
                                </div>

                                <div style="color:cornflowerblue;margin:1em 0;font-size: small">
                                   如果忘记密码,你可以 <?= Html::a('重置密码', ['site/request-password-reset']) ?>.
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5 col-xs-5">
                                    <?= Html::submitButton('登陆', ['class' => 'tm-btn-subscribe', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </form>

                    <div class="tm-social-icons-container text-xs-center">
                        <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
            <div class="footer-link">
                <p>Copyright © 2018 Your Company

                    - Design: <a rel="nofollow" href="#" target="_parent">Templatemo</a></p>
                <p>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="../js/particles.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</html>