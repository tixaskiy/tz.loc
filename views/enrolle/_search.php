<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnrolleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enrolle-search pull-right">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['class'=>"form-inline"]
    ]); ?>


    <?php  echo $form->field($model, 'fullsearch') ?>


    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>        
        <div class="help-block"></div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
