<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
你好， <?= $user->username ?>,

请复制下面链接到浏览器重置密码

<?= $resetLink ?>
