<div class="category fl cat1"> <!-- 非首页，需要添加cat1类 -->
    <div class="cat_hd off">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，并将cat_bd设置为不显示，鼠标滑过时展开菜单则将off类换成on类 -->
        <h2>全部商品分类</h2>
        <em></em>
    </div>

    <div class="cat_bd none">
        <?=\backend\models\GoodsCategory::getCategories()?>
    </div>

</div>