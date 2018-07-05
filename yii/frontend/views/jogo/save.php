<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Instituto de Computação (IComp)';
?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('@web/img/icomp.png',['width'=>'400']) ?>
  
        <p class="lead">Sua pontuação foi <?= $pontuacao ?>.</p>
        
      <p> <?= Html::a('Novo Jogo', ['jogo/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
        <p> <?= Html::a('Ranking', ['jogo/ranking'], ['class' => 'btn btn-lg btn-success']) ?></p>

    </div>

</div>
