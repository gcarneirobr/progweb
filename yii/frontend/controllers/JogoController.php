<?php

namespace frontend\controllers;

use common\models\Jogada;
use yii\data\ActiveDataProvider;
use Yii;

class JogoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRanking()
    {

        $jogadas = Jogada::find()->orderBy(['pontuacao' => SORT_DESC]);

        $provider = new ActiveDataProvider([
            'query' => $jogadas,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('ranking', [
            'jogadas' => $provider
        ]);
    }

    public function actionSave($pontuacao)
    {   
        if (!Yii::$app->user->isGuest) {

            $jogada = new Jogada();
            $jogada->id_user = Yii::$app->user->id;
            $jogada->pontuacao = (int)$pontuacao;
            $jogada->data_hora = new \DateTime();
            $jogada->data_hora = $jogada->data_hora->format("d/m/Y H:i");

            $save = $jogada->save();


            if ($save) {
                return 1;
            } else return 0;
 
        }

    }

}
