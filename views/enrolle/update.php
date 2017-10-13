<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enrolle */

$this->title = 'Отредактировать данные ';
$this->params['breadcrumbs'][] = ['label' => 'Главная', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enrolle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
