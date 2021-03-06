<div id="uploader-demo">
    <a href="<?=\yii\helpers\Url::to(['goods/gallery'])?>">列表页</a>
    <!--用来存放item-->
    <div id="fileList" class="uploader-list"></div>
    <div id="filePicker">选择图片</div>
</div>
<table id="table">
    <?php foreach ($model as $gal):?>
        <tr id="<?=$gal->id?>">
            <td>
                <img id="img" src="<?=$gal->path?>" width="500px">
                <a id="del" class="btn btn-danger">删除</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
<?php
/**
 * @var $this \yii\web\View
 */
$this->registerCssFile('@web/webuploader/webuploader.css');
$this->registerJsFile('@web/webuploader/webuploader.js',[
    //指定该js文件依赖
    'depends'=>\yii\web\JqueryAsset::className()
]);

$upload_url = \yii\helpers\Url::to(['goods/gallery-add']);

$url = \yii\helpers\Url::to(['goods/gallery-delete']);
//var_dump($upload_url);exit;
$js =
    <<<JS
// 初始化Web Uploader
var uploader = WebUploader.create({

    // 选完文件后，是否自动上传。
    auto: true,

    // swf文件路径
    swf: '/webuploader/Uploader.swf',

    // 文件接收服务端。
    server: '$upload_url&id=$goods_id',

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/jpg,image/jpeg,image/png,image/bmp,image/gif'
    }
});
uploader.on( 'uploadSuccess', function( file,response ) {
    //回显
    $('#img').attr('src',response.url);
    //将上传成功的图片地址写入logo字段
    $('#goods-logo').val(response.url);
});

//相册AJAX异步删除
    $("#table").on('click','#del',function() {
        var tr = $(this).closest('tr');
        if (confirm('确定删除?')){
            $.get('$url',{id:tr.attr('id')},function() {
                tr.remove();
            })
        }
    })
JS;
$this->registerJs($js);