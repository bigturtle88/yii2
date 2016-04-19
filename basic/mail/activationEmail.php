<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.08.2015
 * Time: 11:42
 * @var $this yii\web\View
 * @var $user app\models\User
 */
use yii\helpers\Html;

echo 'Hello '.Html::encode($user->login).'.';
echo Html::a('Для активации аккаунта перейдите по этой ссылке.',
    Yii::$app->urlManager->createAbsoluteUrl(
        [
            '/site/activate-account',
            'key' => $user->secret_key
        ]
    ));
