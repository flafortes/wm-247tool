<?php

/**
 * This is the model class for table "{{COMPONENT_TYPE}}".
 *
 * The followings are the available columns in table '{{COMPONENT_TYPE}}':
 * @property integer $PK
 * @property string $NAME
 * @property string $DESC
 * @property string $CORE_SERVICE
 */
class COMPONENTTYPE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return COMPONENTTYPE the static model class
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
		return '{{COMPONENT_TYPE}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAME, DESC, CORE_SERVICE', 'required'),
			array('NAME', 'length', 'max'=>45),
			array('CORE_SERVICE', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PK, NAME, DESC, CORE_SERVICE', 'safe', 'on'=>'search'),
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
			'NAME' => 'Comp. Name',
			'DESC' => 'Desc',
			'CORE_SERVICE' => 'Core Service',
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
		$criteria->compare('CORE_SERVICE',$this->CORE_SERVICE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getComponents()
	{
		return CHtml::listData($this->findAll(),'PK','NAME');
	}
}