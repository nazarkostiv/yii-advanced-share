<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Menu;
use frontend\assets\AppAsset;
use yii\helpers\Url;

use common\widgets\SocialWidget;
use common\widgets\MainWidget;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php $this->beginBody() ?>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div id="fh5co-logo"><a href="<?php echo Yii::$app->homeUrl; ?>"><?php echo MainWidget::widget(['slug' => 'site_name']); ?><span>.</span></a></div>
                </div>
                <div class="col-xs-12 text-center menu-1">

                    <?php
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'Service', 'url' => ['/site/service']],
                        ['label' => 'Work', 'url' => ['/site/work']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Blog', 'url' => ['/site/blog']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                    ];
                    echo Menu::widget([
                        'options' => [],
                        'items' => $menuItems,
                    ]);
                    ?>

                </div>
            </div>

        </div>
    </nav>

    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
<!--        <div class="overlay"></div>-->
    </header>

    <?= $content ?>

    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-4 fh5co-widget ">
                    <h3><?php echo MainWidget::widget(['slug' => 'site_name']); ?>.</h3>
                    <p><?php echo MainWidget::widget(['slug' => 'site_desc']); ?></p>
                    <p><a href="<?php echo Url::toRoute('site/service'); ?>">Learn More</a></p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">

                    <?php
                    echo Menu::widget([
                        'options' => ['class' => 'fh5co-footer-links'],
                        'items' => $menuItems,
                    ]);
                    ?>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block"><?php echo MainWidget::widget(['slug' => 'site_copyright']); ?></small>
                    </p>

                    <?php echo SocialWidget::widget(); ?>

                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>