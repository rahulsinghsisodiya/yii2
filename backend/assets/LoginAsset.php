<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/material-dashboard.css',
        'css/demo.css',
        'css/style.css',
        'css/selectize.css',
        'css/dropify/dist/css/dropify.css'
        
    ];
    public $js = [
   
    'js/jquery-ui.min.js',
    'js/bootstrap.min.js',
    'js/material.min.js',
    'js/perfect-scrollbar.jquery.min.js',
    'js/jquery.validate.min.js',
    'js/moment.min.js',
    //'js/chartist.min.js',
    'js/jquery.bootstrap-wizard.js',
    'js/bootstrap-notify.js',
    'js/jquery.sharrre.js',
    'js/bootstrap-datetimepicker.js',
    'js/jquery-jvectormap.js',
    'js/nouislider.min.js',
    'js/jquery.select-bootstrap.js',
    'js/jquery.datatables.js',
    'js/sweetalert2.js',
    'js/jasny-bootstrap.min.js',
    'js/fullcalendar.min.js',
    'js/jquery.tagsinput.js',
    'js/material-dashboard.js',
    'js/demo.js',
    'js/grid.js',
    'js/dropify/dist/js/dropify.js',
    'js/selectize.js',
    'js/custom.js',
    
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
