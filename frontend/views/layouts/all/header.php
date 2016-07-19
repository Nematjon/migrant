<?php 
use yii\helpers\Html;
?>

<!-- HEADER -->
<header id="header">
	<div id="logo-group">

		<a href="/"><span id="logo"> <img src="<?=Yii::getAlias('@web');?>/images/logoCompаny.png" alt="Мигрант А+"> </span></a>

		<!-- Note: The activity badge color changes when clicked and resets the number to 0
		Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
		<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

		<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
		<div class="ajax-dropdown">

			<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
			<div class="btn-group btn-group-justified" data-toggle="buttons">
				<label class="btn btn-default">
					<input type="radio" name="activity" id="/agent/mail">
					Сообщ (14) </label>
				<label class="btn btn-default">
					<input type="radio" name="activity" id="/agent/notify">
					Увед. (3) </label>
				<label class="btn btn-default">
					<input type="radio" name="activity" id="/agent/task">
					Задача (4) </label>
			</div>

			<!-- notification content -->
			<div class="ajax-notifications custom-scroll">

				<div class="alert alert-transparent">
					<h4>Нажмите кнопку, чтобы показать сообщения здесь</h4>
					Электро́нная по́чта (англ. email, e-mail, от англ. electronic mail) — технология и сервис по пересылке и получению электронных сообщений (называемых «письма» или «электронные письма») между пользователями компьютерной сети (в том числе — Интернета).
				</div>

				<i class="fa fa-lock fa-4x fa-border"></i>

			</div>
			<!-- end notification content -->

			<!-- footer: refresh area -->
			<span> Последнее обновление: 20.03 21:43
				<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Загрузка..." class="btn btn-xs btn-default pull-right">
					<i class="fa fa-refresh"></i>
				</button> </span>
			<!-- end footer -->

		</div>
		<!-- END AJAX-DROPDOWN -->
	</div>

	<!-- projects dropdown -->
	<div class="project-context hidden-xs">

		<span class="label"> Список: </span>
		<span class="project-selector dropdown-toggle" data-toggle="dropdown"> Избранное <i class="fa fa-angle-down"></i></span>

		<!-- Suggestion: populate this list with fetch and push technique -->
		<ul class="dropdown-menu">
			<li>
				<a href="#">Система запросов > Веб-модуль</a>
			</li>
			<li>
				<a href="#">Отчеты > Страховки</a>
			</li>
			<li>
				<a href="#">Заказы > Перелеты</a>
			</li>
			 
			<li class="divider"></li>
			<li>
				<a href="#"><i class="fa fa-cog"></i> Настроить</a>
			</li>
		</ul>
		<!-- end dropdown-menu-->

	</div>
	<!-- end projects dropdown -->

	<!-- pulled right: nav area -->
	<div class="pull-right">
		
		<!-- collapse menu button -->
		<div id="hide-menu" class="btn-header pull-right">
			<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
		</div>
		<!-- end collapse menu -->
		
		<!-- #MOBILE -->
		<!-- Top menu profile link : this shows only when top menu is active -->
		<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
			<li class="">
				<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
					<img src="<?=Yii::getAlias('@web');?>/images/users/userLogo.png" alt="Nematjon N." class="online" />  
				</a>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Настройка</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>П</u>рофиль</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>К</u>ратко</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Полный  <u>Э</u>кран</a>
					</li>
					
					<!--<li class="divider"></li>
					<li>
						<a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
					</li>-->
				</ul>
			</li>
		</ul>

		<div id="settings" class="btn-header transparent pull-right">
			<span  class="project-selector dropdown-toggle" data-toggle="dropdown"> <a href="javascript:void(0);" title="Настройки"  ><i class="fa fa-cogs"></i></a> </span>
		 
			<ul class="dropdown-menu">
				<li>
					<a href="#"> Общие </a>
				</li>
				<li class="divider"></li>
				<li>
					<!--<a id="logout" href="<?=Yii::getAlias('@web');?>/agent/login" title="Аккаунт" data-action="userLogout" data-logout-msg="Вы уверены что хотите выйти?"><i class="fa fa-power-off"></i> Выйти</a>-->
					<a id="logout" href="javascript:void(0);" title="Аккаунт" ><i class="fa fa-power-off"></i> Выйти</a>
				</li>
			</ul>
		</div> 
		 
		<div id="settings" class="btn-header transparent pull-right">
			<span  class="project-selector dropdown-toggle" data-toggle="dropdown"> <a href="javascript:void(0);" title="Отчеты"  ><i class="fa fa-file-text"></i></a> </span>
		 
			<ul class="dropdown-menu">
				 <?php
					$ic=0;
					foreach( Yii::$app->params['menuReport'] as $v ){
						$ic++;
						if( $ic==2 ) echo "<li class='divider'</li>";
						
						echo "<li><a href='{$v['url']}'>{$v['label']}</a></li>";
					}
				?>
				
			</ul>
		</div> 
		
		
		
		
		
		<!--<div id="logout" class="btn-header transparent pull-right">
			<span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-power-off"></i></a> </span>
		</div>-->
		<!-- end logout button -->
		
		
		<!-- search mobile button (this is hidden till mobile view port) -->
		<div id="search-mobile" class="btn-header transparent pull-right">
			<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
		</div>
		<!-- end search mobile button -->

		<!-- input: search field -->
		<form action="search.html" class="header-search pull-right">
			<input id="search-fld"  type="text" name="param" placeholder="Найти отчеты и т.п." data-autocomplete='[
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"]'>
			<button type="submit">
				<i class="fa fa-search"></i>
			</button>
			<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
		</form>
		<!-- end input: search field -->

		
		
		<div id="fullscreen" class="btn-header transparent pull-right">
			<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Полный экран"><i class="fa fa-arrows-alt"></i></a> </span>
		</div>
		
		
	
		
		<!-- #Voice Command: Start Speech -->
		<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
			<div> 
				<a href="javascript:void(0)" title="Голосовая команда" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
				<div class="popover bottom"><div class="arrow"></div>
					<div class="popover-content">
						<h4 class="vc-title">Голосовая команда активирована <br><small>Пожалуйста, говорите четко в микрофон</small></h4>
						<h4 class="vc-title-error text-center">
							<i class="fa fa-microphone-slash"></i> Голосовая команда не активирована
							<br><small class="txt-color-red"> Должны <strong> "Разрешить" </strong> Микрафона</small>
							<br><small class="txt-color-red"> Должно быть <strong>подключен к интернету</strong></small>
						</h4>
						<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()"> Гол. команды </a> 
						<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Закрыть</a> 
					</div>
				</div>
			</div>
		</div>
		<!-- end voice command -->
		
		<div id="fullscreen" class="btn-header transparent pull-right">
			<span  id="refresh" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Предупреждение!<br>Это перезагрузит все Ваши параметры настройки виджета." data-html="true"> 
				<a href="javascript:void(0);" >
					<i class="fa fa-refresh"></i>
				</a> 
			</span>
		</div>

		
		<!-- multiple lang dropdown : find all flags in the flags page -->
		<ul class="header-dropdown-list hidden-xs">
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?=Yii::getAlias('@web');?>/smartAdmin/img/blank.gif" class="flag flag-ru" alt="Russia"> <span> Русский язык </span> <i class="fa fa-angle-down"></i> </a>
				<ul class="dropdown-menu pull-right">
					<li  class="active">
						<a href="javascript:void(0);"><img src="<?=Yii::getAlias('@web');?>/smartAdmin/img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
					</li>
					<li>
						<a href="javascript:void(0);"><img src="<?=Yii::getAlias('@web');?>/smartAdmin/img/blank.gif" class="flag flag-tj" alt="Tajikistan"> Тоҷики</a>
					</li>						
					<li>
						<a href="javascript:void(0);"><img src="<?=Yii::getAlias('@web');?>/smartAdmin/img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
					</li> 
					
				</ul>
			</li>
		</ul>
		<!-- end multiple lang -->

	</div>
	<!-- end pulled right: nav area -->

</header>

<!-- END HEADER -->