<?php

namespace app\modules\v1\controllers;

use yii\web\Controller;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\QueryParamAuth;

/**
 * TipofaltaController implements the CRUD actions for Tipofalta model.
 */
class TipofaltaController extends \yii\rest\ActiveController
{
  public $modelClass = 'app\models\Tipofalta';

  public function behaviors()
  {
   $behaviors = parent::behaviors();
   $behaviors['authenticator'] = [
     'class' => HttpBasicAuth::className(),
     'auth' => function ($username, $password){
       $user = \app\models\User::findByUsername($username);
       if ($user && $user->validatePassword($password)){
         return $user;
       }
       return null;
     }

   ];
   return $behaviors;
  }
}
