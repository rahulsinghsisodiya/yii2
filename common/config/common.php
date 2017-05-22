
<?php

/**
 * Yii console bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);

function p($p, $exit = 1)
    {
        echo '<pre>';
        print_r($p);
        echo '</pre>';
        if ($exit == 1)
        {
            exit;
        }
    }