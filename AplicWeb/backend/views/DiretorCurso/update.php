<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Professor;

/* @var $this yii\web\View */
/* @var $model backend\models\DiretorCurso */

$this->title = 'Update Diretor Curso: ' . $model->id_professor;
$this->params['breadcrumbs'][] = ['label' => 'Diretor Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_professor, 'url' => ['view', 'id' => $model->id_professor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diretor-curso-update">

    <h1>Alterar Diretor Curso</h1>

    <?php $form = ActiveForm::begin(); ?>
      <?= $form->field($model, 'id_professor')->dropDownList(ArrayHelper::map(Professor::find()->all(), 'id_perfil','perfil.nome')) ?>
      <?= Html::submitButton('Atualizar', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>

</div>
