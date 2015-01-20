<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$menu = array(
array('label'=>'管理网站','icon' => 'wrench','url'=>array('site/index')),
array('label'=>'会员管理','icon' => 'user','items'=>array(
        array('label'=>'所有会员','icon' => 'book','url'=>array('user/index')),
        array('label'=>'添加会员','icon' => 'plus','url'=>array('user/create')),
    )),
);
$this->params['menu'] = $menu;

$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
