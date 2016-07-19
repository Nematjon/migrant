<?php
namespace app\commands;
namespace console\controllers;
use Yii;
use yii\console\Controller;

class TestController extends Controller{
	
	public function actionFirst(){
		//Yii::$app->set("request",new \yii\web\Request());
		$auth=Yii::$app->getAuthManager();
		
		$user=new User(["id"=>1,"username"=>"User"]);
		$auth->revokeAll( $user->id );
		
		$auth->assign( $auth->getRole("user"),$user->id );
		Yii::$app->user->login( $user );
		
		var_dump( Yii::$app->user->can("admin") );
		
		echo PHP_EOL;
	}
}

