<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Bank $model */

$this->title = 'แก้ไขข้อมูลธนาคาร: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลธนาคาร', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="bank-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
