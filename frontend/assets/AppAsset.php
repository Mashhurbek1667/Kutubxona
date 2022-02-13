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
        "css/bootstrap.css",
        "css/shop.css",
        "css/style.css",
        "css/creditly.css",
        "css/easy-responsive-tabs.css",
        "css/flexslider.css",
        "css/checkout.css",
        "css/jquery.desoslide.css.css",
        "css/jquery-ui1.css",
        "css/font-awesome.css"
    ];
    public $js = [
        "js/jquery-2.2.3.min.js",
        "js/Smooth.min.js",
        "js/jquery.flexslider.js",
        "js/jquery.desoslide.min.js",
        "js/jquery-ui.js",
        "js/main.js",
        "js/minicart.js",
        "js/scrolling-nav.js",
        "js/move-top.js",
        "js/easing.js",
        "js/SmoothScroll.min.js",
        "js/numscroller-1.0.js",
        "js/demo.js",
        "js/creditly.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
