<?php

namespace app\controllers;

use yii\data\Pagination;
use yii\db\Query;
use app\models\TestedForm;
use app\models\PostForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\NewsForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionIndex()
    {
        $this->view->title = "Главная";
        $query = NewsForm::find()->orderBy(['date' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 8, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $cats = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('cats', 'pages'));
    }

    public function actionContact()
    {
        $this->view->title = "Обратная связь";
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionBasic()
    {
        $this->view->title = "Основные сведения";
        return $this->render('basic');
    }

    public function actionStructure()
    {
        $this->view->title = "Структура и органы управления";
        return $this->render('structure');
    }

    public function actionDocuments()
    {
        $this->view->title = "Документы";
        return $this->render('documents');
    }
    
    public function actionEducational()
    {
        $this->view->title = "Образовательные стандарты";
        return $this->render('educational');
    }

    public function actionEducation()
    {
        $this->view->title = "Образование";
        return $this->render('education');
    }
    
    public function actionGuide()
    {
        $this->view->title = "Руководство.Педагогический состав";
        return $this->render('guide');
    }
    
    public function actionFinancially()
    {
        $this->view->title = "Материально-техническое обеспечение и оснащённость образовательного процесса";
        return $this->render('financially');
    }
    
    public function actionScholarships()
    {
        $this->view->title = "Стипендии и иные виды материальной поддержки";
        return $this->render('scholarships');
    }
    
    public function actionFinanciallys()
    {
        $this->view->title = "Финансово-хозяйственная деятельность";
        return $this->render('financiallys');
    }
    
    public function actionVacant()
    {
        $this->view->title = "Вакантные места для приёма";
        return $this->render('vacant');
    }
    
    public function actionOrganization()
    {
        $this->view->title = "Организация работы с одарёнными детьми";
        return $this->render('organization');
    }
    
    public function actionSafety()
    {
        $this->view->title = "Безопасность дорожного движения";
        return $this->render('safety');
    }
    
    public function actionCareer()
    {
        $this->view->title = "Профориентация";
        return $this->render('career');
    }
   
    public function actionImplementation()
    {
        $this->view->title = "Реализация ГТО";
        return $this->render('implementation');
    }
    
    public function actionParents()
    {
        $this->view->title = "Родителям";
        return $this->render('parents');
    }
    
    public function actionRemote()
    {
        $this->view->title = "Дистанционное обучение";
        return $this->render('remote');
    }
    
    public function actionProvision()
    {
        $this->view->title = "ЕПГУ — предоставление государственных услуг";
        return $this->render('provision');
    }

    public function actionLocal()
    {
        $this->view->title = "Локальные акты";
        return $this->render('local');
    }
 
    public function actionNormative()
    {
        $this->view->title = "Нормативное регулирование";
        return $this->render('normative');
    }
    
    public function actionEducators()
    {
        $this->view->title = "Педагогам";
        return $this->render('educators');
    }
    
    public function actionStudents()
    {
        $this->view->title = "Ученикам";
        return $this->render('students');
    }
    
    public function actionToparents()
    {
        $this->view->title = "Родителям";
        return $this->render('toparents');
    }
    
    public function actionBaby()
    {
        $this->view->title = "Детские безопасные сайты";
        return $this->render('baby');
    }
    
    public function actionVsosh()
    {
        $this->view->title = "ВсОШ";
        return $this->render('vsosh');
    }
 
    public function actionCounteraction()
    {
        $this->view->title = "Противодействие коррупции";
        return $this->render('counteraction');
    }
    
}
