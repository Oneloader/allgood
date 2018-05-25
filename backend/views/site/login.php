<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>登陆</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <body class="login-img3-body">

        <div class="container">
            <form class="login-form" action="<?= \yii\helpers\Url::to(['user/login'])?>" method="post">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-control','tag'=>false],
            ]); ?>
            <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <?= $form->field($model, 'username',['options'=>['tag'=>false]],['labelOptions' => ['class' => 'form-control']])->textInput(['autofocus' => true,'placeholder'=>"用户名",'required'=>'required'])->label(false) ?>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <?= $form->field($model, 'password',['options'=>['tag'=>false]],['labelOptions' => ['class' => 'form-control']])->passwordInput(['placeholder'=>"密码",'required'=>'required'])->label(false) ?>
                    </div>
                    <label class="checkbox">
                        <?= $form->field($model, 'rememberMe',['options'=>['tag'=>false]],['labelOptions' => ['label'=>'记住密码','class' => 'form-control','tag'=>false]])->checkbox() ?>
                        <span class="pull-right"> <a href="#">忘记密码?</a></span>
                    </label>
                    <div class="form-group">
                        <?= Html::submitButton('登陆', ['class' => 'btn btn-info btn-lg btn-block', 'name' => 'login-button']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
            </form>
        </div>
    </body>
</html>
