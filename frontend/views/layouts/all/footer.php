<!-- PAGE FOOTER -->
<div class="page-footer">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<span class="txt-color-white">Migrant A+ 0.0.1 <span class="hidden-xs"> - Ticket aplication</span> © 2016-2016</span>
		</div>

		<div class="col-xs-6 col-sm-6 text-right hidden-xs" id="shortInfoUser">
			<div class="inline-block">
				<i class="txt-color-blueLight hidden-mobile">Последний вход в аккаунтом <i class="fa fa-clock-o"></i> <strong>20.03.2016 04:21 &nbsp;</strong> </i>
				<div class="btn-group dropup">
					<button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
						<i class="fa fa-link"></i> <span class="caret"></span>
					</button>
					
					<ul class="dropdown-menu pull-right text-left">
						<li>
							<div class="padding-5">
								<b>log</b> <i>21.03.2016 04:21</i> <em>141.105.27.175</em>
							</div>
						</li> 
						<li>
							<div class="padding-5">
								<b>log</b> <i>20.03.2016 04:21</i> <em>141.105.27.175</em>
							</div>
						</li> 
						<li class="divider"></li>
						<li>
							<div class="padding-5">
								<a id="logout" href="#" title="Профиль" ><i class="fa fa-user"></i> Профиль</a>
							</div>
							
						</li> 
					</ul>
				</div>
			</div>
			
			<?php
				use yii\helpers\Html;
				if( !Yii::$app->user->isGuest ){ 
					echo Html::beginForm(["/agent/logout"], "post",["id"=>"formLogOut"]);
					echo Html::submitButton(
							"Выйти (" . Yii::$app->user->identity->username . ")",
							["class" => "btn btn-link"]
						);
					echo Html::endForm();
				}
			?>
			
		</div>
	</div>
</div>

<!-- END PAGE FOOTER -->