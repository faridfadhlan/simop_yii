<?php

/**
 * This is the model class for table "kegiatan".
 *
 * The followings are the available columns in table 'kegiatan':
 * @property integer $id
 * @property string $nama
 * @property integer $jenis_waktu_id
 * @property string $nilai_waktu
 * @property string $tahun
 *
 * The followings are the available model relations:
 * @property JenisWaktu $jenisWaktu
 * @property Pekerjaan[] $pekerjaans
 */
class Kegiatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kegiatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, nilai_waktu, tahun', 'required'),
			array('jenis_waktu_id', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>150),
			array('nilai_waktu, tahun', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, jenis_waktu_id, nilai_waktu, tahun', 'safe', 'on'=>'search'),
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
			'jenisWaktu' => array(self::BELONGS_TO, 'JenisWaktu', 'jenis_waktu_id'),
			'pekerjaans' => array(self::HAS_MANY, 'Pekerjaan', 'kegiatan_id'),
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
			'jenis_waktu_id' => 'Jenis Waktu',
			'nilai_waktu' => 'Nilai Waktu',
			'tahun' => 'Tahun',
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
		$criteria->compare('jenis_waktu_id',$this->jenis_waktu_id);
		$criteria->compare('nilai_waktu',$this->nilai_waktu,true);
		$criteria->compare('tahun',$this->tahun,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kegiatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function datagantt() {
            $data = Yii::app()->db
                    ->createCommand("
                        SELECT
                            k.id as id,
                            k.nama as text,
                            (CASE WHEN (p.tgl_mulai IS NULL) 
                            THEN
                                DATE_FORMAT( NOW() , '%d-%m-%Y' )
                            ELSE
                                DATE_FORMAT( MIN( p.tgl_mulai ) , '%d-%m-%Y' )
                            END) AS start_date,
                            datediff( max( p.tgl_selesai ) , min( p.tgl_mulai ) ) AS duration,
                            0.5 AS progress,
                            'true' AS open,
                            NULL as parent
                        FROM
                            kegiatan k
                            INNER JOIN pekerjaan p
                            ON k.id = p.kegiatan_id
                        GROUP BY
                            k.id
                        UNION
                        SELECT
                            id,
                            nama,
                            DATE_FORMAT( tgl_mulai , '%d-%m-%Y' ) as start_date,
                            datediff(tgl_selesai, tgl_mulai) as duration,
                            0.5 as progress,
                            NULL AS open,
                            kegiatan_id as parent
                        FROM
                            pekerjaan
                    ")
                    ->queryAll();
            return $data;
        }
}
