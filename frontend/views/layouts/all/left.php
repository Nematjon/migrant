<?php
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Menu;
	use yii\helpers\Url;
?>




<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

	<!-- User info -->
	<div class="login-info">
		<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
			
			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="<?=Yii::getAlias('@web');?>/images/users/userLogo.png" alt="Nematjon Nematov" class="online" /> 
				<span>
					<?=Yii::$app->user->identity->username;?>
				</span>
				<i class="fa fa-angle-double-down"></i>
			</a> 
			
		</span>
	</div>
	<!-- end user info -->

	<!-- NAVIGATION : This navigation is also responsive-->
	 <nav>
<?php


$menus=[];


foreach( Yii::$app->params['menu'] as $v ){
	$tmp=[];
	if( $v['items'] ){
		foreach( $v['items'] as $v1 ){
			$tmp[]=array(
				'label'=>$v1['label'],
				'url'=>"/".$v1['url'],
				'active' => $this->context->route == $v1['url']
				//'url'=>URL::to( Yii::$app->urlManagerFrontEnd->baseUrl."/".$v1['url'] )
			);
		}
	}

	$menus['items'][]=array(
		'label'=>$v['label'],
		'url'=>$v['url'],
		'options'=>array('class'=>'aaa'),
		'template'=>'<a href="{url}"><i class="fa fa-lg fa-fw '.$v['icon'].'"></i> <span class="menu-item-parent">{label}</span></a>',
		'items'=>$tmp
	);
}
$menus['activeCssClass']='active';
$menus['firstItemCssClass']='';
$menus['lastItemCssClass'] ='';
echo Menu::widget( $menus );

?>
</nav>

	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>

</aside>
<!-- END NAVIGATION -->