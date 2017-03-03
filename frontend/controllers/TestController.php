<?php
namespace frontend\controllers;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class TestController extends Controller {

	public function actionRun() {

        die('run');
    }
}

?>