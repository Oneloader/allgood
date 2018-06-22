<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<section id="hero-banner">
    <div class="banner-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <h2 style="font-size: 32px"><b>宁明泉佳</b> 新能源科技</h2>
                        <p style="font-size: 46px;font-weight: bolder;letter-spacing:10px ">用薄膜太阳能改变世界</p>
                    <p style="font-size: 16px;font-weight: lighter;">CHANGE THE WORLD WITH THIN-FILM SOLAR.</p>
                        <a class="btn btn-primary btn-lg" href="#">现在进入</a>
                </div>
            </div>
        </div>
    </div>
    <span style="font-size: 8px;float: right;padding-top: 120px;padding-right: 30px;color: #343434">* 位于北京奥林匹克公园的汉能中心</span>
</section><!--/#main-slider-->
<section id="pricing">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeInDown" style="letter-spacing: 10px">产品</h2>
            <p class="wow fadeInDown"  style="color: grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row">
            <?php
                foreach ($goods as $good):
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="hidden" value="<?=$good->id?>" name="good_id">
                <a href="<?=\yii\helpers\Url::to(['site/goods','id'=>$good->id])?>" style="text-decoration:none;">
                <div class="wow zoomIn" id="big" data-wow-duration="400ms" data-wow-delay="0ms">
                    <ul class="pricing" id="pp">
                        <li class="plan-header alpha" id="xx" style="background: #222222; ;background:url('<?=$good->logo?>') no-repeat;">
<!--                            filter:alpha(Opacity=90);-moz-opacity:0.6;opacity: 0.6;-->
                            <div class="price-duration">
                                    <span class="price">
                                        ￥<?=$good->shop_price?>
                                    </span>
                                <span class="duration">
                                        单片价格
                                    </span>
                            </div>
                            <div class="plan-name">
                                <?=$good->name?>
                            </div>
                        </li>
                        <li style="width:auto;height: 295px;color: grey;margin-top: 50px"><?=$good->desc?></li>
                        <li class="plan-purchase"><a class="btn btn-primary" href="#">了解详情</a></li>
                    </ul>
                </div>
                </a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section><!--/#pricing-->

<section id="business-stats">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeInDown" style="letter-spacing: 10px">前景</h2>
            <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="business-stats" data-digit="6850" data-duration="1000"></div>
                    <strong>Clients</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="business-stats" data-digit="1465" data-duration="1000"></div>
                    <strong>Completed</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                    <div class="business-stats" data-digit="4325" data-duration="1000"></div>
                    <strong>In Progress</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                    <div class="business-stats" data-digit="2568" data-duration="1000"></div>
                    <strong>Revenue</strong>
                </div>
            </div>
        </div>
    </div>
</section><!--/#business-stats-->

