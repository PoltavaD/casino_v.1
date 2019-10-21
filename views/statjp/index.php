<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JackpotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jackpots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jackpot-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?//= Html::a('Create Jackpot', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
    <p>
        <?= Html::a('Статистика', ['statistic/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_player',
//            'rate',
            'jackpot',
//            'win',
            [
                'attribute' => 'win',
                'content' => function($model){
                    return $model->jackpot/$model->rate;
                }
            ],
            'date',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>


</div>
