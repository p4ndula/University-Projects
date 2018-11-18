<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class=""><img src="/images/2.png" /></span><span class="">' . 'MIM ENGINEERING'. '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
        <?php
        if (null != Yii::$app->user->id) {
            echo Nav::widget([
                'items' => [
                    ['label' => '<i class="fa fa-user-circle-o"></i> Logout',
                        'url' => ['/site/logout'],
                        'linkOptions' => [
                            'data-method' => 'post',
                            'id'=>'logout'
                        ]],
                ],
                'options' => ['class' => 'navbar-nav'],
                'encodeLabels' => false,
            ]);
        }
        ?>
        </div>
    </nav>
</header>
