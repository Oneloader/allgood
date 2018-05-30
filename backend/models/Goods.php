<?php
namespace backend\models;

use yii\db\ActiveRecord;
use yii\helpers\Json;

class Goods extends ActiveRecord{

    public function rules()
    {
        return [
//            'name'=>'商品名称',
//            'logo'=>'logo',
//            'desc'=>'商品简介',
            [['sn','goods_category_id','brand_id','market_price','shop_price','stock','is_on_sale','status','sort','create_time','view_times'],'integer','message'=>"内容类型不允许"],
            [['name'],'string','max'=>50],
            [['name'],'unique','message'=>"已存在相同商品"],
            [['logo'],'string','max'=>255],
            [['desc'],'string','max'=>255],
            [['name'],'required','message'=>"商品名称不能为空"],
            [['desc'],'required','message'=>"商品简介不能为空"],
        ];
    }

    //获取分类信息,作为ztree的节点数据
    public static function getNodes(){
        $nodes = self::find()->select(['id','parent_id','name'])->asArray()->all();
        array_unshift($nodes,['id'=>0,'parent_id'=>0,'name'=>'【顶级分类】']);
        return Json::encode($nodes);
    }


}