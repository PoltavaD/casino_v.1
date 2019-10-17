<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersgamesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usersgames-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_game') ?>

<!--    --><?//= $form->field($model, 'pitBoss.login') ?>

    <?= $form->field($model, 'id_pitBoss') ?>

    <?= $form->field($model, 'id_player') ?>

    <?= $form->field($model, 'points') ?>

    <?= $form->field($model, 'summa_zala') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
