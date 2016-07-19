<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use frontend\assets\IndexAsset;
use yii\bootstrap\ActiveForm;

IndexAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"  id="extr-page">
	<head>
	
		<meta charset="<?= Yii::$app->charset ?>">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="author" content="">
		<meta name="description" content="">
		
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
  
		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?=Yii::getAlias('@web');?>/smartAdmin/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?=Yii::getAlias('@web');?>/smartAdmin/img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="<?=Yii::getAlias('@web');?>/smartAdmin/img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/web/smartAdmin/img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/web/smartAdmin/img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/web/smartAdmin/img/splash/touch-icon-ipad-retina.png">
		
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="<?=Yii::getAlias('@web');?>/smartAdmin/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="<?=Yii::getAlias('@web');?>/smartAdmin/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="<?=Yii::getAlias('@web');?>/smartAdmin/img/splash/iphone.png" media="screen and (max-device-width: 320px)">
		 
	</head>
	 
	<body>
					
	<?php $this->beginBody() ?>
	<video class="video" loop="true" autoplay="true" poster="<?=Yii::getAlias('@web');?>/images/backMain.png">
		<source class="video__source" type="video/webm" src="<?=Yii::getAlias('@web');?>/video/backMain.webm">
	</video>

		<!-- HEADER -->
		<header id="header">

			<div id="logo-group">
				<span id="logo"> <img src="<?=Yii::getAlias('@web');?>/images/logoCompаny.png" alt="Мигрант А+"> </span>
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Нужна учетная запись?</span> <a href="<?=Yii::getAlias('@web');?>/agent/signup" class="btn btn-danger">Регистрация</a> </span>

		</header>
		<!-- END HEADER -->

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big">Мигрант А+</h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">Текст текст  текст  текст  текст  текст  текст  текст  текст  текст  </h4>
								<div class="login-app-icons">
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Ссылка 1</a>
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Ссылка 2</a>
								</div>
							</div>
							
							<img src="http://www.officialpsds.com/images/thumbs/Airline-ticket-2-psd53205.png" class="pull-right display-image" alt="" style="width:210px">

						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">Заголовок 1</h5>
								<p>
									Текст текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 текст 1 
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">Заголовок 2!</h5>
								<p>
									Заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 заголовок 2 
								</p>
							</div>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
							<?= $content ?>
						</div>
						
						<h5 class="text-center"> - Мы в социальных сетях -</h5>
															
							<ul class="list-inline text-center">
								<li>
									<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						
					</div>
				</div>
			</div>

		</div>
		<!-- END SHORTCUT AREA -->

		<?php $this->endBody() ?>
		<!--================================================== -->
 

		<!--[if IE 8]>
		<h1>Ваш браузер устарел, пожалуйста, обновите ваш браузер, перейдя в www.microsoft.com/download</h1>
		<![endif]-->
	</body>
</html>
<?php $this->endPage() ?>