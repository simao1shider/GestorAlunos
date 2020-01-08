<?php

namespace app\modules\v1\controllers;

use yii\web\Controller;
use yii\filters\auth\HttpBasicAuth;

/**
 * TipoturnoController implements the CRUD actions for Tipoturno model.
 */
class TipoturnoController extends \yii\rest\ActiveController
{
  public $modelClass = 'app\models\Tipoturno';

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
