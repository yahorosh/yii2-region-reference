<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model karakum\region\models\RegionType */

$this->title = $model->code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('regions/type', 'Region Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('regions/type', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('regions/type', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('regions/type', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
        ],
    ]) ?>

</div>
