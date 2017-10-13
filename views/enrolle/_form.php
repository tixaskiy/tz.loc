<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Enrolle */
/* @var $form yii\widgets\ActiveForm */
if($model->isNewRecord){
  $model->gender = true;
  $model->resident = true;
}

?>

<div class="enrolle-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
  <div class="col-md-3">

  </div>
  <div class="col-md-6 well">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->radioList( ['1'=>'Муж.','0'=>'Жен.']); ?>

    <?= $form->field($model, 'group_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'points')->textInput() ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'resident')->radioList( ['1'=>'Местный','0'=>'Иногородний']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Зарегистрировать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

  </div>
  <div class="col-md-3">

  </div>
</div>

    <?php ActiveForm::end(); ?>

</div>
