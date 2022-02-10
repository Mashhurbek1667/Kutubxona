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
        "css/font-awesome.css",
    ];
    public $js = [
        "js/jquery-2.2.3.min.js",
        "js/main.js",
        "js/minicart.js",
        "js/scrolling-nav.js",
        "js/move-top.js",
        "js/easing.js",
        "js/SmoothScroll.min.js",
        "js/numscroller-1.0.js",
        "js/bootstrap.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
