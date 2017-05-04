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
class AppAsset extends AssetBundle
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
		"css/error.css",//my styles
		"css/styles.css"//my styles
    ];
    public $js = [
		"smartAdmin/js/libs/jquery-2.1.1.min.js",
		"smartAdmin/js/libs/jquery-ui-1.10.3.min.js",//IMPORTANT: APP CONFIG
		"smartAdmin/js/app.config.js",
		"smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js", //JS TOUCH : include this plugin for mobile drag / drop touch events
		"smartAdmin/js/bootstrap/bootstrap.min.js",// BOOTSTRAP JS
		"smartAdmin/js/notification/SmartNotification.min.js",// CUSTOM NOTIFICATION
		"smartAdmin/js/smartwidgets/jarvis.widget.min.js",// JARVIS WIDGETS
		"smartAdmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js",// EASY PIE CHARTS
		"smartAdmin/js/plugin/sparkline/jquery.sparkline.min.js",// SPARKLINES
		"smartAdmin/js/plugin/jquery-validate/jquery.validate.min.js",// JQUERY VALIDATE
		"smartAdmin/js/plugin/masked-input/jquery.maskedinput.min.js",// JQUERY MASKED INPUT
		"smartAdmin/js/plugin/select2/select2.min.js",// JQUERY SELECT2 INPUT
		"smartAdmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js",// JQUERY UI + Bootstrap Slider
		"smartAdmin/js/plugin/msie-fix/jquery.mb.browser.min.js",// browser msie issue fix
		"smartAdmin/js/plugin/fastclick/fastclick.min.js",// FastClick: For mobile devices
		//"smartAdmin/js/demo.min.js",// Demo purpose only
		"smartAdmin/js/app.min.js",// MAIN APP JS FILE
		"smartAdmin/js/speech/voicecommand.min.js",// Voice command : plugin   ENHANCEMENT PLUGINS : NOT A REQUIREMENT
		"smartAdmin/js/smart-chat-ui/smart.chat.ui.min.js",// SmartChat UI : plugin   ENHANCEMENT PLUGINS : NOT A REQUIREMENT
		"smartAdmin/js/smart-chat-ui/smart.chat.manager.min.js",// ENHANCEMENT PLUGINS : NOT A REQUIREMENT
		"smartAdmin/js/plugin/pace/pace.min.js",//data-pace-options='{ "restartOnRequestAfter": true }' PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-
		"smartAdmin/js/plugin/x-editable/x-editable.min.js",
		"js/scripts.js",// ENHANCEMENT PLUGINS : NOT A REQUIREMENT
    ]; 
	
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
