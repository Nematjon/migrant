<?php
	use yii\widgets\Breadcrumbs;
?>
<div class="row" >		
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<div class="page-title txt-color-blueDark">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?> 
		</div>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> Броней <span class="txt-color-white">500</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
					20, 100, 30, 90, 50, 10, 0,90,150,80
				</div>
			</li>
			<li class="sparks-info">
				<h5> Билеты <span class="txt-color-white"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Билеты за 10 дней"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					20, 100, 30, 40, 50, 19, 8,90,150,80
				</div>
			</li>
			<li class="sparks-info">
				<h5> Заказы <span class="txt-color-white"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					20, 100, 5, 60, 50, 111, 0,90,150,30
				</div>
			</li>
		</ul>
	</div> 
</div>