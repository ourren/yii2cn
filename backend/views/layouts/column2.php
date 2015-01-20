<?php
use kartik\sidenav\SideNav;
use yii\widgets\Breadcrumbs;

?>
<?php $this->beginContent('@app/views/layouts/main.php'); ?>
<div  style="padding:0 20px; margin-top:60px;">
	<div class="row">
		<div class="col-sm-2">
		<?php
		    echo SideNav::widget([
		        'type' => SideNav::TYPE_DEFAULT,
		        'heading' => false,
		        'items' => $this->params['menu'],
		    ]);
		?>
		</div>
		<div class="col-md-10">
			<?= Breadcrumbs::widget([
			    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= $content ?>
		 </div>
	</div>
</div>
<?php $this->endContent();