<?php

/**
 * This is the model class for table "rubro".
 *
 * The followings are the available columns in table 'rubro':
 * @property integer $id
 * @property string $nombrerubro
 * @property integer $estadorubro
 * @property string $starrubro
 *
 * The followings are the available model relations:
 * @property Comercio[] $comercios
 */
class Rubro extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rubro the static model class
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
		return 'rubro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombrerubro', 'required'),
			array('estadorubro', 'numerical', 'integerOnly'=>true),
			array('nombrerubro', 'length', 'max'=>200),
			array('starrubro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombrerubro, estadorubro, starrubro', 'safe', 'on'=>'search'),
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
			'comercios' => array(self::HAS_MANY, 'Comercio', 'idrubro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombrerubro' => 'Nombrerubro',
			'estadorubro' => 'Estadorubro',
			'starrubro' => 'Starrubro',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nombrerubro',$this->nombrerubro,true);
		$criteria->compare('estadorubro',$this->estadorubro);
		$criteria->compare('starrubro',$this->starrubro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}