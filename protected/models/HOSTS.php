<?php

/**
 * This is the model class for table "{{HOSTS}}".
 *
 * The followings are the available columns in table '{{HOSTS}}':
 * @property integer $PK
 * @property string $HOSTNAME
 * @property string $USER
 * @property string $PASSWORD
 * @property string $IP
 * @property string $DESC
 *
 * The followings are the available model relations:
 * @property SERVERS[] $SERVERSs
 */
class HOSTS extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HOSTS the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{HOSTS}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOSTNAME, USER, PASSWORD, IP, DESC', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PK, HOSTNAME, USER, PASSWORD, IP, DESC', 'safe', 'on'=>'search'),
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
			'SERVERSs' => array(self::HAS_MANY, 'SERVERS', 'FK_HOST'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PK' => 'Pk',
			'HOSTNAME' => 'Hostname',
			'USER' => 'User',
			'PASSWORD' => 'Password',
			'IP' => 'Ip',
			'DESC' => 'Desc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PK',$this->PK);
		$criteria->compare('HOSTNAME',$this->HOSTNAME,true);
		$criteria->compare('USER',$this->USER,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('IP',$this->IP,true);
		$criteria->compare('DESC',$this->DESC,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function getHosts()
	{
			return CHtml::listData($this->findAll(),'PK','HOSTNAME');
	}
}