<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Perfil;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlunoturnoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aluno Turnos';
$this->params['breadcrumbs'][] = $this->title;
$perfis = Perfil::find()->innerJoin('aluno', 'aluno.id_perfil = perfil.id_user')->all();
?>
<div class="aluno-turno-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aluno Turno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'aluno_id_perfil',
               // 'value' => 'aluno_id_perfil.perfil.user_id',
                //'value' => $perfis[0]->nome ,
            ],
            [
                'attribute' => 'turno_id',
                'value' => 'turno.tipo',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>



</div>
