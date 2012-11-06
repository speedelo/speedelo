<?php

/**
 * This is the model class for table "sucursal".
 *
 * The followings are the available columns in table 'sucursal':
 * @property integer $id
 * @property integer $idcomercio
 * @property string $nombresucursal
 * @property string $descripcionsucursal
 * @property string $telefonosucursal
 * @property string $correosucursal
 * @property string $direccionsucursal
 * @property integer $idcomuna
 * @property integer $estadosucursal
 * @property string $starcomercio
 *
 * The followings are the available model relations:
 * @property Comercio $idcomercio0
 */
class Sucursal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sucursal the static model class
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
		return 'sucursal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcomercio, nombresucursal, descripcionsucursal, telefonosucursal, correosucursal, direccionsucursal, idcomuna, starcomercio', 'required'),
			array('idcomercio, idcomuna, estadosucursal', 'numerical', 'integerOnly'=>true),
			array('nombresucursal, descripcionsucursal, telefonosucursal, correosucursal, direccionsucursal', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idcomercio, nombresucursal, descripcionsucursal, telefonosucursal, correosucursal, direccionsucursal, idcomuna, estadosucursal, starcomercio', 'safe', 'on'=>'search'),
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
			'idcomercio0' => array(self::BELONGS_TO, 'Comercio', 'idcomercio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idcomercio' => 'Idcomercio',
			'nombresucursal' => 'Nombresucursal',
			'descripcionsucursal' => 'Descripcionsucursal',
			'telefonosucursal' => 'Telefonosucursal',
			'correosucursal' => 'Correosucursal',
			'direccionsucursal' => 'Direccionsucursal',
			'idcomuna' => 'Idcomuna',
			'estadosucursal' => 'Estadosucursal',
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
		$criteria->compare('idcomercio',$this->idcomercio);
		$criteria->compare('nombresucursal',$this->nombresucursal,true);
		$criteria->compare('descripcionsucursal',$this->descripcionsucursal,true);
		$criteria->compare('telefonosucursal',$this->telefonosucursal,true);
		$criteria->compare('correosucursal',$this->correosucursal,true);
		$criteria->compare('direccionsucursal',$this->direccionsucursal,true);
		$criteria->compare('idcomuna',$this->idcomuna);
		$criteria->compare('estadosucursal',$this->estadosucursal);
		$criteria->compare('starcomercio',$this->starcomercio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}