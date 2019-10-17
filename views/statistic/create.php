<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usersgames */

$this->title = 'Create Usersgames';
$this->params['breadcrumbs'][] = ['label' => 'Usersgames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usersgames-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
