<?php

/**
 * This is the model class for table "pekerjaan".
 *
 * The followings are the available columns in table 'pekerjaan':
 * @property integer $id
 * @property string $nama
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property integer $jumlah_target
 * @property string $keterangan
 * @property integer $unit_target_id
 * @property integer $user_creator_id
 * @property integer $user_pj_id
 * @property integer $kegiatan_id
 * @property integer $before_id
 *
 * The followings are the available model relations:
 * @property Catatan[] $catatans
 * @property User $userCreator
 * @property User $userPj
 * @property Kegiatan $kegiatan
 * @property UnitTarget $unitTarget
 * @property PelaksanaPekerjaan[] $pelaksanaPekerjaans
 */
class Pekerjaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pekerjaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, tgl_mulai, tgl_selesai, jumlah_target', 'required'),
			array('jumlah_target, unit_target_id, user_creator_id, user_pj_id, kegiatan_id, before_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>255),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, tgl_mulai, tgl_selesai, jumlah_target, keterangan, unit_target_id, user_creator_id, user_pj_id, kegiatan_id, before_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'catatans' => array(self::HAS_MANY, 'Catatan', 'pekerjaan_id'),
			'userCreator' => array(self::BELONGS_TO, 'User', 'user_creator_id'),
			'userPj' => array(self::BELONGS_TO, 'User', 'user_pj_id'),
			'kegiatan' => array(self::BELONGS_TO, 'Kegiatan', 'kegiatan_id'),
			'unitTarget' => array(self::BELONGS_TO, 'UnitTarget', 'unit_target_id'),
			'pelaksanaPekerjaans' => array(self::HAS_MANY, 'PelaksanaPekerjaan', 'pekerjaan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'tgl_mulai' => 'Tgl Mulai',
			'tgl_selesai' => 'Tgl Selesai',
			'jumlah_target' => 'Jumlah Target',
			'keterangan' => 'Keterangan',
			'unit_target_id' => 'Unit Target',
			'user_creator_id' => 'User Creator',
			'user_pj_id' => 'User Pj',
			'kegiatan_id' => 'Kegiatan',
			'before_id' => 'Before',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tgl_mulai',$this->tgl_mulai,true);
		$criteria->compare('tgl_selesai',$this->tgl_selesai,true);
		$criteria->compare('jumlah_target',$this->jumlah_target);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('unit_target_id',$this->unit_target_id);
		$criteria->compare('user_creator_id',$this->user_creator_id);
		$criteria->compare('user_pj_id',$this->user_pj_id);
		$criteria->compare('kegiatan_id',$this->kegiatan_id);
		$criteria->compare('before_id',$this->before_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pekerjaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
