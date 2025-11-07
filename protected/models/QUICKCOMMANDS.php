<?php

/**
 * This is the model class for table "{{QUICKCOMMANDS}}".
 *
 * The followings are the available columns in table '{{QUICKCOMMANDS}}':
 * @property integer $PK
 * @property string $DESC
 * @property string $COMMAND
 * @property integer $FK_HOST
 *
 * The followings are the available model relations:
 * @property HOSTS $fKHOST
 */
class QUICKCOMMANDS extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return QUICKCOMMANDS the static model class
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
		return '{{QUICKCOMMANDS}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FK_HOST', 'numerical', 'integerOnly'=>true),
			array('DESC', 'length', 'max'=>45),
			array('COMMAND', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PK, DESC, COMMAND, FK_HOST', 'safe', 'on'=>'search'),
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
			'fKHOST' => array(self::BELONGS_TO, 'HOSTS', 'FK_HOST'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PK' => 'Pk',
			'DESC' => 'Desc',
			'COMMAND' => 'Command',
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
		$criteria->compare('DESC',$this->DESC,true);
		$criteria->compare('COMMAND',$this->COMMAND,true);
		$criteria->compare('FK_HOST',$this->FK_HOST);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function getCommands()
	{
			return CHtml::listData($this->findAll(),'PK','DESC');
	}
}