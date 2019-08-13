<?php

namespace app\models;
use Yii;

class SuratUmum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_umum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no', 'no_agenda', 'tanggal_terima', 'nomor_surat', 'tanggal_surat', 'hal', 'asal', 'batas_waktu', 'klasifikasi', 'sifat', 'status', 'tgl_disposisi', 'kepada_disposisi', 'klasifikasi_disposisi', 'sifat_disposisi', 'isi_disposisi', 'catatan_disposisi', 'koordinator_disposisi', 'tgl_disposisi_kasi', 'kepada_disposisi_kasi', 'catatan_disposisi_kasi', 'perekam', 'agenda', 'tgl_agenda_dir', 'isi_sesdit', 'sumber', 'owner', 'iku'], 'required'],
            [['no', 'batas_waktu'], 'integer'],
            [['hal', 'kepada_disposisi', 'isi_disposisi', 'catatan_disposisi', 'kepada_disposisi_kasi', 'catatan_disposisi_kasi', 'isi_sesdit'], 'string'],
            [['no_agenda', 'klasifikasi', 'sifat'], 'string', 'max' => 50],
            [['tanggal_terima', 'nomor_surat', 'tanggal_surat', 'asal', 'tgl_disposisi', 'koordinator_disposisi', 'tgl_disposisi_kasi', 'tgl_agenda_dir', 'owner'], 'string', 'max' => 255],
            [['status', 'sumber', 'iku'], 'string', 'max' => 10],
            [['klasifikasi_disposisi', 'sifat_disposisi', 'perekam'], 'string', 'max' => 100],
            [['agenda'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no' => 'No',
            'no_agenda' => 'No Agenda',
            'tanggal_terima' => 'Tanggal Terima',
            'nomor_surat' => 'Nomor Surat',
            'tanggal_surat' => 'Tanggal Surat',
            'hal' => 'Hal',
            'asal' => 'Asal',
            'batas_waktu' => 'Batas Waktu',
            'klasifikasi' => 'Klasifikasi',
            'sifat' => 'Sifat',
            'status' => 'Status',
            'tgl_disposisi' => 'Tgl Disposisi',
            'kepada_disposisi' => 'Kepada Disposisi',
            'klasifikasi_disposisi' => 'Klasifikasi Disposisi',
            'sifat_disposisi' => 'Sifat Disposisi',
            'isi_disposisi' => 'Isi Disposisi',
            'catatan_disposisi' => 'Catatan Disposisi',
            'koordinator_disposisi' => 'Koordinator Disposisi',
            'tgl_disposisi_kasi' => 'Tgl Disposisi Kasi',
            'kepada_disposisi_kasi' => 'Kepada Disposisi Kasi',
            'catatan_disposisi_kasi' => 'Catatan Disposisi Kasi',
            'perekam' => 'Perekam',
            'agenda' => 'Agenda',
            'tgl_agenda_dir' => 'Tgl Agenda Dir',
            'isi_sesdit' => 'Isi Sesdit',
            'sumber' => 'Sumber',
            'owner' => 'Owner',
            'iku' => 'Iku',
        ];
    }
}
