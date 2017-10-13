<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Enrolle */

$this->title = 'Регистрация Абитуриента';
$this->params['breadcrumbs'][] = ['label' => 'Главная', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrolle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
