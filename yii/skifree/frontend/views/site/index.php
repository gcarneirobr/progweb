<?php
use yii\helpers\Html;
/* @var $this yii\web\View */



$this->title = 'Instituto de Computação (IComp)';
?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('@web/img/icomp.png',['width'=>'400']) ?>

        <p class="lead">O Instituto de Computação (IComp), antigo Departamento de Ciência da Computação (DCC), é um instituto acadêmico que agrega os professores da área de Computação.
        Como todo instituto acadêmico o IComp atua no ensino, pesquisa e extensão, além de desempenhar atividades administrativas.</p>

        <p> <?= Html::a('Iniciar Jogo', ['jogo/index'], ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>


    </div>
</div>
