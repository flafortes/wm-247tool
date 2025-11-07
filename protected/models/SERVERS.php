<?php

/**
 * This is the model class for table "{{SERVERS}}".
 *
 * The followings are the available columns in table '{{SERVERS}}':
 * @property integer $PK
 * @property string $NAME
 * @property string $DESC
 * @property string $STATUS
 * @property string $IS_USER
 * @property string $IS_PASS
 * @property string $PORT
 * @property integer $FK_HOST
 *
 * The followings are the available model relations:
 * @property QUICKCOMMANDS[] $QUICKCOMMANDSs
 * @property HOSTS $fKHOST
 * @property TASKDETAILS[] $TASKDETAILSs
 */
class SERVERS extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SERVERS the static model class
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
		return '{{SERVERS}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME', 'required'),
			array('FK_HOST', 'numerical', 'integerOnly'=>true),
			array('NAME', 'length', 'max'=>90),
			array('DESC, STATUS, IS_USER, IS_PASS, PORT', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PK, NAME, DESC, STATUS, IS_USER, IS_PASS, PORT, FK_HOST', 'safe', 'on'=>'search'),
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
			'QUICKCOMMANDSs' => array(self::HAS_MANY, 'QUICKCOMMANDS', 'FK_SERVER'),
			'fKHOST' => array(self::BELONGS_TO, 'HOSTS', 'FK_HOST'),
			'TASKDETAILSs' => array(self::HAS_MANY, 'TASKDETAILS', 'FK_SERVER'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PK' => 'Pk',
			'NAME' => 'Name',
			'DESC' => 'Desc',
			'STATUS' => 'Status',
			'IS_USER' => 'Is User',
			'IS_PASS' => 'Is Pass',
			'PORT' => 'Port',
			'FK_HOST' => 'Fk Host',
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
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('DESC',$this->DESC,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('IS_USER',$this->IS_USER,true);
		$criteria->compare('IS_PASS',$this->IS_PASS,true);
		$criteria->compare('PORT',$this->PORT,true);
		$criteria->compare('FK_HOST',$this->FK_HOST);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function getServers()
	{
			return CHtml::listData($this->findAll(),'PK','NAME');
	}
}