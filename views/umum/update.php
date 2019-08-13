<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratUmum */

$this->title = 'Update Surat Umum: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-umum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
