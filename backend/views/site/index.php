<?php
/* @var $this yii\web\View */
$menu = array(
array('label'=>'管理网站','icon' => 'wrench','url'=>array('index')),
array('label'=>'会员管理','icon' => 'user','items'=>array(
        array('label'=>'所有会员','icon' => 'book','url'=>array('user/index')),
        array('label'=>'添加会员','icon' => 'plus','url'=>array('user/create')),
    )),
);
$this->params['menu'] = $menu;

$this->title = '后台管理－yii2cn';
?>
<legend>Profile</legend>
<p>
欢迎来到yii2cn后台管理界面
</p>
