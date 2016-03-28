<?php

/**
 * This is the model class for table "pelaksana_pekerjaan".
 *
 * The followings are the available columns in table 'pelaksana_pekerjaan':
 * @property integer $id
 * @property string $tgl_alokasi
 * @property integer $jumlah_target
 * @property string $keterangan
 * @property double $kualitas
 * @property integer $pekerjaan_id
 * @property integer $user_pelaksana_id
 * @property integer $user_pengalokasi_id
 *
 * The followings are the available model relations:
 * @property Pekerjaan $pekerjaan
 * @property User $userPelaksana
 * @property User $userPengalokasi
 * @property ProgresPelaksanaPekerjaan[] $progresPelaksanaPekerjaans
 */
class PelaksanaPekerjaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $bidang_id;
        public $seksi_id;
    
        public function tableName()
	{
		return 'pelaksana_pekerjaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tgl_alokasi, jumlah_target, keterangan, kualitas', 'required'),
			array('jumlah_target, pekerjaan_id, user_pelaksana_id, user_pengalokasi_id', 'numerical', 'integerOnly'=>true),
			array('kualitas', 'numerical'),
                        array('bidang_id, seksi_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tgl_alokasi, jumlah_target, keterangan, kualitas, pekerjaan_id, user_pelaksana_id, user_pengalokasi_id', 'safe', 'on'=>'search'),
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
			'pekerjaan' => array(self::BELONGS_TO, 'Pekerjaan', 'pekerjaan_id'),
			'userPelaksana' => array(self::BELONGS_TO, 'User', 'user_pelaksana_id'),
			'userPengalokasi' => array(self::BELONGS_TO, 'User', 'user_pengalokasi_id'),
			'progresPelaksanaPekerjaans' => array(self::HAS_MANY, 'ProgresPelaksanaPekerjaan', 'pelaksana_pekerjaan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tgl_alokasi' => 'Tgl Alokasi',
			'jumlah_target' => 'Jumlah Target',
			'keterangan' => 'Keterangan',
			'kualitas' => 'Kualitas',
			'pekerjaan_id' => 'Pekerjaan',
			'user_pelaksana_id' => 'User Pelaksana',
			'user_pengalokasi_id' => 'User Pengalokasi',
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
		$criteria->compare('tgl_alokasi',$this->tgl_alokasi,true);
		$criteria->compare('jumlah_target',$this->jumlah_target);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('kualitas',$this->kualitas);
		$criteria->compare('pekerjaan_id',$this->pekerjaan_id);
		$criteria->compare('user_pelaksana_id',$this->user_pelaksana_id);
		$criteria->compare('user_pengalokasi_id',$this->user_pengalokasi_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PelaksanaPekerjaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
