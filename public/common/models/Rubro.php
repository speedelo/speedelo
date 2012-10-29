<?php

/**
 * This is the model class for table "rubro".
 *
 * The followings are the available columns in table 'rubro':
 * @property integer $id_rubro
 * @property string $nombre_rubro
 * @property integer $id_comercio
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
			array('nombre_rubro, id_comercio', 'required'),
			array('id_comercio', 'numerical', 'integerOnly'=>true),
			array('nombre_rubro', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_rubro, nombre_rubro, id_comercio', 'safe', 'on'=>'search'),
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
			'id_rubro' => 'Id Rubro',
			'nombre_rubro' => 'Nombre Rubro',
			'id_comercio' => 'Id Comercio',
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

		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('nombre_rubro',$this->nombre_rubro,true);
		$criteria->compare('id_comercio',$this->id_comercio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}