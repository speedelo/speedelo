<?php

/**
 * This is the model class for table "sucursal".
 *
 * The followings are the available columns in table 'sucursal':
 * @property integer $id_sucursal
 * @property string $nombre_sucursal
 * @property string $descripcion_sucursal
 * @property string $direccion_sucursal
 * @property string $telefono_sucursal
 * @property string $mail_sucursal
 * @property integer $id_comercio
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
			array('nombre_sucursal, descripcion_sucursal, direccion_sucursal, telefono_sucursal, mail_sucursal, id_comercio', 'required'),
			array('id_comercio', 'numerical', 'integerOnly'=>true),
			array('nombre_sucursal, descripcion_sucursal, direccion_sucursal, telefono_sucursal, mail_sucursal', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sucursal, nombre_sucursal, descripcion_sucursal, direccion_sucursal, telefono_sucursal, mail_sucursal, id_comercio', 'safe', 'on'=>'search'),
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
			'id_sucursal' => 'Id Sucursal',
			'nombre_sucursal' => 'Nombre Sucursal',
			'descripcion_sucursal' => 'Descripcion Sucursal',
			'direccion_sucursal' => 'Direccion Sucursal',
			'telefono_sucursal' => 'Telefono Sucursal',
			'mail_sucursal' => 'Mail Sucursal',
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

		$criteria->compare('id_sucursal',$this->id_sucursal);
		$criteria->compare('nombre_sucursal',$this->nombre_sucursal,true);
		$criteria->compare('descripcion_sucursal',$this->descripcion_sucursal,true);
		$criteria->compare('direccion_sucursal',$this->direccion_sucursal,true);
		$criteria->compare('telefono_sucursal',$this->telefono_sucursal,true);
		$criteria->compare('mail_sucursal',$this->mail_sucursal,true);
		$criteria->compare('id_comercio',$this->id_comercio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}