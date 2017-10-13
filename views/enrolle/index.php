<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnrolleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список Абитуриентов';
$textsearch='';

if($searchModel->fullsearch){
  $this->title = 'Поиск Абитуриентов';
  $textsearch='Показаны только абитуриенты, найденные по запросу " '.$searchModel->fullsearch.'".';
}
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="enrolle-index">

  <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <p class="bg-success">
      Cпасибо, данные сохранены, вы можете их <?= Html::a('отредактировать', ['enrolle/update'])?> или
      просмотреть <?= Html::a('список абитуриентов',['/'])?>.
    </p>

  <?php else: ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php if($textsearch):?>
    <p><?= $textsearch;?></p>
    <?= Html::a('Показать всех абитуриентов', '/',['class' => 'btn btn-default'])?>
   <?php endif; ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        // 'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-hover'
        ],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'last_name',
            // 'gender',
            'group_num',
            // 'email:email',
             'points',
            // 'birth_date',
            // 'resident',

            //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php endif; ?>
</div>
