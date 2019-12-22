<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DiretorCursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diretor Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diretor-curso-index">

    <h1>Diretor Curso</h1>

    <p>
        <?= Html::a('Criar Diretor Curso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_professor',
                'value' => 'professor.perfil.nome',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
