<?php

/**
 * This is the model class for table "{{SERVICEUSAGE}}".
 *
 * The followings are the available columns in table '{{SERVICEUSAGE}}':
 * @property integer $PK
 * @property string $Name
 * @property string $Running
 * @property string $AccessLast
 * @property string $Log
 */
class SERVICEUSAGE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SERVICEUSAGE the static model class
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
		return '{{SERVICEUSAGE}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, Running, AccessLast, Log', 'required'),
			array('Name', 'length', 'max'=>120),
			array('Running', 'length', 'max'=>10),
			array('Log', 'length', 'max'=>70),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PK, Name, Running, AccessLast, Log', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PK' => 'Pk',
			'Name' => 'Name',
			'Running' => 'Running',
			'AccessLast' => 'Access Last',
			'Log' => 'Log',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Running',$this->Running,true);
		$criteria->compare('AccessLast',$this->AccessLast,true);
		$criteria->compare('Log',$this->Log,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}