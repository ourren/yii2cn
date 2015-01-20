<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$menu = array(
array('label'=>'管理网站','icon' => 'wrench','url'=>array('site/index')),
array('label'=>'会员管理','icon' => 'user','items'=>array(
        array('label'=>'所有会员','icon' => 'book','url'=>array('user/index')),
        array('label'=>'添加会员','icon' => 'plus','url'=>array('user/create')),
    )),
);
$this->params['menu'] = $menu;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
