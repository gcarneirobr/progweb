<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ranking';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $jogadas,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            [
                'attribute' => 'id_user',
                'value' => 'user.username'
            ],
            'pontuacao',
            [
                'attribute' => 'data_hora',
                'format' => ['date', 'php: d/m/Y H:i:s']
            ]

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
