<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use \DateTime;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuários';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
            //$dateNow = new DateTime('NOW');
            //var_dump($dateNow);
        ?>
    <p>
        <?= Html::a('Criar Usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'username',
            //'auth_key',
           // 'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            [
                'attribute' => 'created_at', 
                'format' => ['date', 'php: d/m/Y H:i:s']
            ],
            //'updated_at',
            //'id_curso',
             [
                'attribute' => 'id_curso',
                'value' => 'curso.nome'
            ], 

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
