<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratUmum */

$this->title = 'Create Surat Umum';
$this->params['breadcrumbs'][] = ['label' => 'Surat Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-umum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
