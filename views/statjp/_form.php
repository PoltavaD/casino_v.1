<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jackpot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jackpot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_player')->textInput() ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?= $form->field($model, 'jackpot')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
