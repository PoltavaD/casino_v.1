<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usersgames */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usersgames-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'pitBoss.login')->textInput() ?>

    <?= $form->field($model, 'id_player')->textInput() ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <?= $form->field($model, 'summa_zala')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
