<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(
		[
			"id" => "login-form",
			"options"=>[
				"class"=>"smart-form client-form"
			]
		]
	); ?>
	<header>Войти в систему</header>
	
	<fieldset>
		<?php
			echo $form->field($model, 'username', [
				"template" => "
					<section>
						<label class='label'>Логин</label>
						<label class='input'> 
							<i class='icon-append fa fa-user'></i>
								{input}
							<b class='tooltip tooltip-top-right'><i class='fa fa-user txt-color-teal'></i> Введите имя пользователя</b>
							{error}
						</label>
					</section>"
			])->textInput(["autofocus" => true]);
		 
			echo $form->field($model, 'password', [
				"template" => "
					<section>
						<label class='label'>Пароль</label>
						<label class='input'> 
							<i class='icon-append fa fa-lock'></i>
								{input}
							<b class='tooltip tooltip-top-right'><i class='fa fa-user txt-color-teal'></i>Введите ваш пароль</b>
							{error}
						</label>
						<div class='note'>
						".Html::a('Забыли пароль?', ['agent/request-password-reset'])."
						</div>
					</section>"
			])->passwordInput();
		?>
		<section>
			<label class="checkbox">
				<input type="checkbox" name="remember" checked="">
				<i></i>Оставаться в системе</label>
		</section>
	<footer>
		<?= Html::submitButton('Войти в систему', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
	</footer>
	
<?php ActiveForm::end(); ?>
 
	 