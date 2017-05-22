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
        'css/site.css',
        'css/bootstrap.css',
        'css/animate.css',
        'css/icon-fonts.css',
        'css/main.css',
        'css/responsive.css',
    ];
    public $js = [
            'js/jquery.js',
            'js/plugins.js',
            'js/jquery.main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
