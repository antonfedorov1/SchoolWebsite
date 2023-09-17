<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\PostForm;
use app\models\TestedForm;
use app\controllers\SiteController;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{

    public function actionIndex()
    {
        return $this->render('index');
    }



}
