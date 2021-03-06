<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

use frontend\models\SignupForm;

class TestController extends Controller{

	public function actionIndex(){
        return $this->render('index');
    }
	
	 /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
       
		$model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
 
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}