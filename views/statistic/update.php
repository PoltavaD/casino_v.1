<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usersgames */

$this->title = 'Update Usersgames: ' . $model->id_game;
$this->params['breadcrumbs'][] = ['label' => 'Usersgames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_game, 'url' => ['view', 'id' => $model->id_game]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usersgames-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
