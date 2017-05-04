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
		<?php
			foreach( Yii::$app->params['linkTags'] as $v ){
				$this->registerLinkTag($v);
			}
		?>
		
	</head>

	<body>
					
	<?php $this->beginBody() ?>
	<video class="video" loop="true" autoplay="true" poster="<?=Yii::getAlias('@web');?>/images/backMain.png">
		<source class="video__source" type="video/webm" src="<?=Yii::getAlias('@web');?>/video/backMain.webm">
	</video>
		<?
			echo $this->render("./all/header");
			echo $this->render("./all/left");
		?>

		<div id="main" role="main">
			<div id="content">
				<?=$this->render("./all/topBar");?>
				<br>
				<section id="widget-grid" class="">
					<?= $content ?>
					
				</section>
			</div>
		</div>
		<?php
			echo $this->render("./all/footer");
			echo $this->render("./all/shortcut");
		?>

		<?php $this->endBody() ?>
		
		<!--[if IE 8]>
		<h1>Ваш браузер устарел, пожалуйста, обновите ваш браузер, перейдя в www.microsoft.com/download</h1>
		<![endif]-->
	</body>
</html>
<?php $this->endPage() ?>