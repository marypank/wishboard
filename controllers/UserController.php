<?php

namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

class SiteController extends ActiveController
{
    public function actionIndex()
    {
        var_dump(23);
        exit();
    }
}
