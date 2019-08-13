<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Umums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-umum-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Umum', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'no',
            'no_agenda',
            'tanggal_terima',
            'nomor_surat',
            //'tanggal_surat',
            //'hal:ntext',
            //'asal',
            //'batas_waktu',
            //'klasifikasi',
            //'sifat',
            //'status',
            //'tgl_disposisi',
            //'kepada_disposisi:ntext',
            //'klasifikasi_disposisi',
            //'sifat_disposisi',
            //'isi_disposisi:ntext',
            //'catatan_disposisi:ntext',
            //'koordinator_disposisi',
            //'tgl_disposisi_kasi',
            //'kepada_disposisi_kasi:ntext',
            //'catatan_disposisi_kasi:ntext',
            //'perekam',
            //'agenda',
            //'tgl_agenda_dir',
            //'isi_sesdit:ntext',
            //'sumber',
            //'owner',
            //'iku',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
