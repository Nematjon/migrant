<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //"css/site.css",
		"smartAdmin/css/bootstrap.min.css",//Basic Styles
		"smartAdmin/css/font-awesome.min.css",
		"smartAdmin/css/smartadmin-production-plugins.min.css",//SmartAdmin Styles : Caution! DO NOT change the order
		"smartAdmin/css/smartadmin-production.min.css",
		"smartAdmin/css/smartadmin-skins.min.css",
		"smartAdmin/css/smartadmin-rtl.min.css",//SmartAdmin RTL Support
		"smartAdmin/css/demo.min.css",//Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp
		"css/styles.css"//my styles
    ];
    public $js = [
		//"smartAdmin/js/libs/jquery-2.1.1.min.js",
		"smartAdmin/js/libs/jquery-ui-1.10.3.min.js",//IMPORTANT: APP CONFIG
		"smartAdmin/js/app.config.js",
		"smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js", //JS TOUCH : include this plugin for mobile drag / drop touch events
		"smartAdmin/js/bootstrap/bootstrap.min.js",// BOOTSTRAP JS
		"smartAdmin/js/plugin/jquery-validate/jquery.validate.min.js",// JQUERY VALIDATE
		
		"smartAdmin/js/plugin/masked-input/jquery.maskedinput.min.js",// JQUERY MASKED INPUT
		"smartAdmin/js/app.min.js",// MAIN APP JS FILE
		"smartAdmin/js/plugin/pace/pace.min.js",//data-pace-options='{ "restartOnRequestAfter": true }' PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-
		"js/scripts.js",// ENHANCEMENT PLUGINS : NOT A REQUIREMENT
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
