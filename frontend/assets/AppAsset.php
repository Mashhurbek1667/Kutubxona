<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/shop.css',
        'css/jquery-ui1.css',
        'css/jquery.desoslide.css',
        'css/footer4.css',
        'css/footer3.css',
        'css/footer2.css',
        'css/footer1.css',
        'css/font-awesome.css',
        'css/flexslider.css',
        'css/easy-responsive-tabs.css',
        'css/creditly.css',
        'css/checkout.css',
        'css/bootstrap.css',
        'css/animate.min.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/creditly.js',
        'js/demo.js',
        'js/easing.js',
        'js/easy-responsive-tabs.js',
        'js/imagezoom.js',
        'js/jquery.desoslide.min.js',
        'js/jquery.flexslider.js',
        'js/jquery-2.2.3.min.js',
        'js/jquery-ui.js',
        'js/main.js',
        'js/minicart.js',
        'js/move-top.js',
        'js/numscroller-1.0.js',
        'js/scrolling-nav.js',
        'js/SmoothScroll.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
