<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/24
 * Time: 15:56
 */
namespace backend\components;
use backend\models\Nav;
use yii\base\Widget;
use yii\helpers\Html;

class NavWidget extends Widget
{
    public function run()
    {
        $nav = Nav::find()
            ->where(['status' => 1])
            ->orderBy('sort ASC')
            ->all();
        foreach($nav as $_v){
            $navs[] = $_v->id.'|'.$_v->nav_cn.'|'.$_v->nav_en;
        }
        // 渲染视图
        return $this->render('@app/views/site/_nav', [
            'nav'=>$navs,
        ]);
    }
}