<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/site_dark.css',
		'css/fullcalendar.css'
    ];
    public $js = [
		'js/classie.js',
		'js/menumodal.js',
		'js/moment.min.js',
		'js/fullcalendar.min.js',		
		'js/paginationfsv-v1.0.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
		'yii\bootstrap\BootMaterialCssAsset',
        'yii\bootstrap\BootMaterialJsAsset',
		'yii\flickity\flickityPluginAsset',
		'yii\sweetalert\sweetalertPluginAsset',
		'yii\tingle\tinglePluginAsset',
    ];
}
