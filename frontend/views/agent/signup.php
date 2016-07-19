<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>
<style>
#extr-page-header-space{
	display:none;
}
</style>

	<?php $form = ActiveForm::begin(
		[
			"id" => "smart-form-register",
			"options"=>[
				"class"=>"smart-form client-form"
			]
		]
	); ?>
	<header>Регистрация новый субдомен</header>

	<fieldset>
		<?php
			echo $form->field($model, 'username', [
				"template" => "
					<section>
						<label class='input'> <i class='icon-append fa fa-user'></i>
							{input}
							<b class='tooltip tooltip-top-right'>Введите логин для входа</b> </label>
							{error}
						</section>"
			])->textInput(["placeholder"=>"Логин"]);
		 
			echo $form->field($model, 'email', [
				"template" => "
					<section>
						<label class='input'> <i class='icon-append fa fa-envelope'></i>
							{input}
							<b class='tooltip tooltip-top-right'>Введите E-mail для восстоновление</b> </label>
							{error}
						</section>"
			])->input("email",["autofocus" => true,"placeholder"=>"E-mail адрес"]);
		 
			echo $form->field($model, 'password', [
				"template" => "
					<section>
						<label class='input'> <i class='icon-append fa fa-lock'></i>
							{input}
							<b class='tooltip tooltip-top-right'>Введите пароль</b> </label>
							{error}
						</section>"
			])->passwordInput(["placeholder"=>"Пароль"]);
	 
			echo $form->field($model, 'password', [
				"template" => "
					<section>
						<label class='input'> <i class='icon-append fa fa-lock'></i>
							{input}
							<b class='tooltip tooltip-top-right'>Повторите пароль</b> </label>
							{error}
					</section>"
			])->passwordInput(["placeholder"=>"Повторите пароль"]);
		?>
		
  
	</fieldset>

	<fieldset>
		<div class="row">
			<?php
			
				echo $form->field($model, 'firstname', [
					"template" => "
						<section class='col col-6'>
							<label class='input'>
								{input}
								{error}
							</label>
						</section>"
				])->textInput(["placeholder"=>"Имя"]);
				
				echo $form->field($model, 'lastname', [
					"template" => "
						<section class='col col-6'>
							<label class='input'>
								{input}
								{error}
							</label>
						</section>"
				])->textInput(["placeholder"=>"Фамилия"]);
			?>
			 
		</div>		 
	</fieldset>
	<footer>
		<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
	</footer>

	<div class="message">
		<i class="fa fa-check"></i>
		<p> Благодарим Вас за регистрацию! </p>
	</div>
<?php ActiveForm::end(); ?>