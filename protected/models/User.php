<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $nip
 * @property string $nama
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property integer $seksi_id
 * @property integer $level_id
 *
 * The followings are the available model relations:
 * @property Catatan[] $catatans
 * @property Pekerjaan[] $pekerjaans
 * @property Pekerjaan[] $pekerjaans1
 * @property PelaksanaPekerjaan[] $pelaksanaPekerjaans
 * @property PelaksanaPekerjaan[] $pelaksanaPekerjaans1
 * @property Seksi $seksi
 * @property Level $level
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, email, password', 'required'),
			array('seksi_id, level_id', 'numerical', 'integerOnly'=>true),
			array('nip', 'length', 'max'=>18),
			array('nama', 'length', 'max'=>50),
			array('username', 'length', 'max'=>25),
			array('email', 'length', 'max'=>150),
			array('password', 'length', 'max'=>60),
			array('remember_token', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nip, nama, username, email, password, remember_token, seksi_id, level_id', 'safe', 'on'=>'search'),
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
			'catatans' => array(self::HAS_MANY, 'Catatan', 'user_id'),
			'pekerjaans' => array(self::HAS_MANY, 'Pekerjaan', 'user_creator_id'),
			'pekerjaans1' => array(self::HAS_MANY, 'Pekerjaan', 'user_pj_id'),
			'pelaksanaPekerjaans' => array(self::HAS_MANY, 'PelaksanaPekerjaan', 'user_pelaksana_id'),
			'pelaksanaPekerjaans1' => array(self::HAS_MANY, 'PelaksanaPekerjaan', 'user_pengalokasi_id'),
			'seksi' => array(self::BELONGS_TO, 'Seksi', 'seksi_id'),
			'level' => array(self::BELONGS_TO, 'Level', 'level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nip' => 'Nip',
			'nama' => 'Nama',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'remember_token' => 'Remember Token',
			'seksi_id' => 'Seksi',
			'level_id' => 'Level',
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
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('remember_token',$this->remember_token,true);
		$criteria->compare('seksi_id',$this->seksi_id);
		$criteria->compare('level_id',$this->level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}
        
        public function hashPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}
}
