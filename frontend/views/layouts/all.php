<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" id="all-pages">
	<head>
		<?php
			foreach( Yii::$app->params['metaTags'] as $v ){
				$this->registerMetaTag($v);
			}
		?>
		
		
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
 
			

 
		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp 
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">-->
		<?php
			foreach( Yii::$app->params['linkTags'] as $v ){
				$this->registerLinkTag($v);
			}
		?>
		
	</head>
	
	<!--

	TABLE OF CONTENTS.
	
	Use search to find needed section.
	
	===================================================================
	
	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #RIGHT PANEL              |  right panel userlist          |
	|  13. #MAIN PANEL               |  main panel                    |
	|  14. #MAIN CONTENT             |  content holder                |
	|  15. #PAGE FOOTER              |  page footer                   |
	|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  17. #PLUGINS                  |  all scripts and plugins       |
	
	===================================================================
	
	-->
	
	<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body>
					
	<?php $this->beginBody() ?>
	<video class="video" loop="true" autoplay="true" poster="<?=Yii::getAlias('@web');?>/images/backMain.png">
		<source class="video__source" type="video/webm" src="<?=Yii::getAlias('@web');?>/video/backMain.webm">
	</video>
		<?
			echo $this->render("./all/header");
			echo $this->render("./all/left");
		?>

		

		<!-- MAIN PANEL -->
		<div id="main" role="main">
 
			<!-- MAIN CONTENT -->
			<div id="content">
				<?=$this->render("./all/topBar");?>
				<br>

				<!-- widget grid -->
				<section id="widget-grid" class="">
					<?= $content ?>
					
				</section>
				<!-- end widget grid -->
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<?php
			echo $this->render("./all/footer");
			echo $this->render("./all/shortcut");
		?>


		<?php $this->endBody() ?>
		<!--================================================== -->
 

		<!--[if IE 8]>
		<h1>Ваш браузер устарел, пожалуйста, обновите ваш браузер, перейдя в www.microsoft.com/download</h1>
		<![endif]-->
	</body>
</html>
<?php $this->endPage() ?>