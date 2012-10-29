<?php

/**
 * This is the model class for table "comercio".
 *
 * The followings are the available columns in table 'comercio':
 * @property integer $id_comercio
 * @property string $nombre_comercio
 * @property integer $rubro_id
 * @property integer $estado
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
			array('nombre_comercio, rubro_id, estado', 'required'),
			array('rubro_id, estado', 'numerical', 'integerOnly'=>true),
			array('nombre_comercio', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_comercio, nombre_comercio, rubro_id, estado', 'safe', 'on'=>'search'),
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
			'id_comercio' => 'Id Comercio',
			'nombre_comercio' => 'Nombre Comercio',
			'rubro_id' => 'Rubro',
			'estado' => 'Estado',
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

		$criteria->compare('id_comercio',$this->id_comercio);
		$criteria->compare('nombre_comercio',$this->nombre_comercio,true);
		$criteria->compare('rubro_id',$this->rubro_id);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}