<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersgamesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usersgames';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usersgames-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?//= Html::a('Create Usersgames', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
<!---->
<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Статистика JP', ['statjp/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id_game',
//            'id_pitBoss',
//            'pitBoss.login',
        ['attribute' => 'id_pitBoss', 'value' => 'pitBoss.login'],
            'id_player',
            'points',
            'summa_zala',
            'date',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>


</div>
