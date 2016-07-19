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
//print_r( $menus );
echo Menu::widget( $menus );
/*
echo Menu::widget([

    'items' => [
        ['label' => 'Поиск', 
        	'url' => ['site/index'],
        	'options'=>['class'=>'','onclick'=>"return false;"],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-search"></i> <span class="menu-item-parent">{label}</span></a>',
        	'items'=>[
        		['label'=>'Перелеты','url'=>'site/index'  ],
        		['label'=>'ЖД билеты','url'=>'site/index' ],

        	]
        ],
        
        ['label' => 'Заказы', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">{label}</span></a>',
        	'items'=>[
        		['label'=>'Перелеты','url'=>'#'  ],
        		['label'=>'ЖД билеты','url'=>'#' ],

        	]
        ],
        
        ['label' => 'Тикет Робот', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-ticket"></i> <span class="menu-item-parent">{label}</span></a>',
        ],

        ['label' => 'Биллинг', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">{label}</span></a>',
        	'items'=>[
     			['label'=>'Депозиты','url'=>'#'],
     			['label'=>'Депозиты субагентов','url'=>'#'],
     		]
        ],
        
        ['label' => 'Счета', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-credit-card"></i> <span class="menu-item-parent">{label}</span></a>',
        ],
        
        ['label' => 'Ведомости', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">{label}</span></a>',
        ],


        ['label' => 'Система запросов', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">{label}</span></a>',
        	'items'=>[
     			['label'=>'Входящие','url'=>'#'],
     			['label'=>'Исходящие','url'=>'#'],
     			['label'=>'Рассылка','url'=>'#'],
     		]
        ],

        ['label' => 'Веб-модуль', 
        	'url' => ['site/index'],
        	'options'=>['class'=>''],
        	'template' => '<a href="{url}"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">{label}</span></a>',
        	'items'=>[
     			['label'=>'XML API','url'=>'#'],
     			['label'=>'Frame','url'=>'#'],
     		]
        ],
		['label' => 'About', 'url' => ['site/about']],
        ['label' => 'Products',
			'url' => ['product/index'],
			'options'=>['class'=>'dropdown'],
			'template' => '<a href="{url}" class="href_class">{label}</a>',
			'items' => [
				['label' => 'New Arrivals', 'url' => ['product/new']],
				['label' => 'Most Popular', 'url' => ['product/popular']],
			]
		],
    ]
	//'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
]);*/
?>
</nav>

<!--
<nav>
	<ul>
		<!-<li><a href="#" title="#"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Главная страница</span></a></li>->
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-search"></i> <span class="menu-item-parent">Поиск</span></a>
			<ul>
				<li><a href="#">Перелеты</a></li>
				<li><a href="#">ЖД билеты</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">Заказы</span></a>
			<ul>
				<li><a href="#">Перелеты</a></li>
				<li><a href="#">ЖД билеты</a></li>
			</ul>
		</li>
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-ticket"></i> <span class="menu-item-parent">Тикет Робот</span></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">Биллинг</span></a>
			<ul>
				<li><a href="#">Депозиты</a></li>
				<li><a href="#">Депозиты субагентов</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-credit-card"></i> <span class="menu-item-parent">Счета</span></a>
		</li>

		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Ведомости</span></a>
		</li>
		 
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Система запросов</span></a>
			<ul>
				<li><a href="#">Входящие</a></li>
				<li><a href="#">Исходящие</a></li>
				<li><a href="#">Рассылка</a></li>
			</ul>
		</li>  
		 
		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Веб-модуль</span></a>
			<ul>
				<li><a href="#">XML API</a></li>
				<li><a href="#">Frame</a></li>
			</ul>
		</li>  
		<!-<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Отчеты</span></a>
			<ul>
				<li><a href="#">Общий</a></li>
				<li><a href="#">По продажам</a></li>
				<li><a href="#">Графический</a></li>
				<li><a href="#">Аналитический</a></li>
				<li><a href="#">Страховки</a></li>
				<li><a href="#">AIR лог</a></li>
				<li><a href="#">Купоны</a></li>
				<li><a href="#">По продажам ЖД</a></li>
			</ul>
		</li>

		<li>
			<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Настройки</span></a>
			<ul>
				<li><a href="#">Общие</a></li> 
			</ul>
		</li>->
	</ul>
</nav>-->

	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>

</aside>
<!-- END NAVIGATION -->