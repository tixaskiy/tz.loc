<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Enrolle */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Enrolles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrolle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'last_name',
            'gender',
            'group_num',
            'email:email',
            'points',
            'birth_date',
            'resident',
        ],
    ]) ?>

</div>
