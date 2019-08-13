<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuratUmum */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-umum-view">

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
            'no',
            'no_agenda',
            'tanggal_terima',
            'nomor_surat',
            'tanggal_surat',
            'hal:ntext',
            'asal',
            'batas_waktu',
            'klasifikasi',
            'sifat',
            'status',
            'tgl_disposisi',
            'kepada_disposisi:ntext',
            'klasifikasi_disposisi',
            'sifat_disposisi',
            'isi_disposisi:ntext',
            'catatan_disposisi:ntext',
            'koordinator_disposisi',
            'tgl_disposisi_kasi',
            'kepada_disposisi_kasi:ntext',
            'catatan_disposisi_kasi:ntext',
            'perekam',
            'agenda',
            'tgl_agenda_dir',
            'isi_sesdit:ntext',
            'sumber',
            'owner',
            'iku',
        ],
    ]) ?>

</div>
