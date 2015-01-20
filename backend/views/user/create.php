<?php
$menu = array(
array('label'=>'管理网站','icon' => 'wrench','url'=>array('site/index')),
array('label'=>'会员管理','icon' => 'user','items'=>array(
        array('label'=>'所有会员','icon' => 'book','url'=>array('user/index')),
        array('label'=>'添加会员','icon' => 'plus','url'=>array('user/create')),
    )),
);
$this->params['menu'] = $menu;

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
