<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset;

AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="container">
    <h1 class="text-center login-title">

    </h1>
    <p class="text-center">Sign in to MIM ENGINEERING</p>
    <div class="card card-container">
        <h2 class="profile-img-card"><span><img src="/images/logo.png" /></span></h2>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => true]); ?>

        <?= $form->field($model, 'login', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('login'), 'autofocus' => true]) ?>

        <?= $form->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>

        <div class="forgot-pwd-link">
            <?= Html::a('Forgot the password?', ['#']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<style>
    body {
        background-color: #FFF;
    }
</style>
