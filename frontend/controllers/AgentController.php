<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\ForbiddenHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class AgentController extends Controller
{
    /**
     * @inheritdoc
     */
	public $layout="all";
	public function beforeAction($action){
		  
		if ($action->id == 'error') $this->layout = 'all';
		return parent::beforeAction($action);
	}
    public function behaviors()
    {
		
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
 
  
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
	
	public function actionError(){ 
		$exception = Yii::$app->errorHandler->exception;
	  
		if ($exception !== null) {
			/*if( Yii::app()->request->isAjaxRequest ){
				$data = array('status'=>$exception->getName(),'code'=>$exception->statusCode,'message'=>$exception->getMessage() );
				echo json_encode($data);
				Yii::app()->end();
			}*/
			
			return $this->render('error', ['exception' => $exception,"error"=>$error]);
		}
	}
 
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex(){
		//throw new \yii\web\ForbiddenHttpException('У вас недостаточно прав для выполнения указанного действия');
		return $this->render('index');
    }

	public function actionSflights(){
		if ( Yii::$app->user->can('createPost')) {
			return $this->render('sflights');
		}else{
			throw new ForbiddenHttpException("fert");
		}
	}
	
	public function actionStrain(){
		return $this->render('strain',["title"=>"ЖД билеты"]);
	}
	
	public function actionOflights(){
		return $this->render('oflights');
	}
	
	public function actionOtrain(){
		return $this->render('otrain');
	}
	
	public function actionTicket(){
		return $this->render('ticket');
	}
	
	public function actionSubdeposits(){
		return $this->render('subDeposits');
	}
	
	public function actionDeposits(){
		return $this->render('deposits');
	}
	public function actionBill(){
		return $this->render('bill');
	}
	public function actionSheet(){
		return $this->render('sheet');
	}
	
	public function actionInbox(){
		return $this->render('inbox');
	}
	
	public function actionOutbox(){
		return $this->render('outbox');
	}
	
	public function actionDelivery(){
		return $this->render('delivery');
	}
	
	public function actionXml(){
		return $this->render('xml');
	}
	public function actionFrame(){
		return $this->render('frame');
	}
	public function actionMail(){
		return $this->render('mail');
	}
	public function actionTask(){
		return $this->render('task');
	}
	public function actionNotify(){
		return $this->render('notify');
	}
	public function actionVoice_commants(){
		return $this->render('voice_commants');
	}
	
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
		$this->layout="index";
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
 

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
		$this->layout="index";
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

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
