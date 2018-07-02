<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<h1>SkiFree</h1>
    <?php
        $this->registerCssFile('@web/css/estilos.css');
        $this->registerJsFile('@web/js/skifree.js');
    ?>   
    <?php 
        $js = '
            function saveJogada(pontuacao) {
                $.ajax({
                        type: \'GET\',
                        url: \'' . Url::to(['jogo/save']) . '\',
                        data: {
                            \'pontuacao\': pontuacao
                        },
                        error: function() {
                            console.log(\'Deu algum erro!\');
                        },
                        success: function(data) {
                            console.log(data);
                        }
                    });
                }
        ';

    ?>
  
    
    <?php $this->registerJs($js, 3); ?>

    
    <div id="montanha">
    <div id="skier"></div>
    </div>

    <div id="placar">
    <h3>Placar</h3>
    <span>Metros percorridos: </span> <span id="metros">0</span><br />
    <span>Vidas restantes: </span> <span id="vidas">3</span><br/> <br/>
    <span>Velocidade: </span> <span id="velocidade">20 m/s</span>
    <p> <?= Html::a('Ranking', ['jogo/ranking'], ['class' => 'btn btn-lg btn-success']) ?></p>