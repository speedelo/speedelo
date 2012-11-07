<?php

/**
 * This is the model class for table "comercio".
 *
 * The followings are the available columns in table 'comercio':
 * @property integer $id
 * @property string $nombrecomercio
 * @property integer $idrubro
 * @property integer $estadocomercio
 * @property string $starcomercio
 *
 * The followings are the available model relations:
 * @property Rubro $idrubro0
 * @property Sucursal[] $sucursals
 */
class Comercio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comercio the static model class
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
		return 'comercio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombrecomercio, idrubro', 'required'),
			array('idrubro, estadocomercio', 'numerical', 'integerOnly'=>true),
			array('nombrecomercio', 'length', 'max'=>200),
			array('starcomercio', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombrecomercio, idrubro, estadocomercio, starcomercio', 'safe', 'on'=>'search'),
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
			'idrubros' => array(self::BELONGS_TO, 'Rubro', 'idrubro'),
			'sucursals' => array(self::HAS_MANY, 'Sucursal', 'idcomercio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombrecomercio' => 'Nombrecomercio',
			'idrubro' => 'Idrubro',
			'estadocomercio' => 'Estadocomercio',
			'starcomercio' => 'Starcomercio',
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
		$criteria->compare('nombrecomercio',$this->nombrecomercio,true);
		$criteria->compare('idrubro',$this->idrubro);
		$criteria->compare('estadocomercio',$this->estadocomercio);
		$criteria->compare('starcomercio',$this->starcomercio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}