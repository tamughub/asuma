<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratUmum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-umum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no')->textInput() ?>

    <?= $form->field($model, 'no_agenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_terima')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batas_waktu')->textInput() ?>

    <?= $form->field($model, 'klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sifat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_disposisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepada_disposisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'klasifikasi_disposisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sifat_disposisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_disposisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'catatan_disposisi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'koordinator_disposisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_disposisi_kasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepada_disposisi_kasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'catatan_disposisi_kasi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'perekam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_agenda_dir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_sesdit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iku')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
