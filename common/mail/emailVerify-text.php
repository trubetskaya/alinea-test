<?php

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
//http://localhost:8098/index.php?r=site%2Fverify-email&token=ZVFLwyI6g5sT6SSX3q28So1EtWld_4oR_1661863247
?>
Hello <?= $user->username ?>,

Follow the link below to verify your email:

<?= $verifyLink ?>
