<?php

/**
 * This is the model class for table "opcion".
 *
 * The followings are the available columns in table 'opcion':
 * @property integer $id_opcion
 * @property integer $id_producto
 * @property string $nombre_opcion
 * @property string $descripcion_opcion
 * @property integer $stock
 * @property integer $estado_opcion
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 */
class Opcion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opcion the static model class
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
		return 'opcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_producto, nombre_opcion, stock, fecha_creacion', 'required'),
			array('id_producto, stock, estado_opcion', 'numerical', 'integerOnly'=>true),
			array('nombre_opcion', 'length', 'max'=>200),
			array('descripcion_opcion', 'length', 'max'=>250),
			array('fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_opcion, id_producto, nombre_opcion, descripcion_opcion, stock, estado_opcion, fecha_creacion, fecha_modificacion', 'safe', 'on'=>'search'),
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
			'id_opcion' => 'Id Opcion',
			'id_producto' => 'Id Producto',
			'nombre_opcion' => 'Nombre Opcion',
			'descripcion_opcion' => 'Descripcion Opcion',
			'stock' => 'Stock',
			'estado_opcion' => 'Estado Opcion',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_modificacion' => 'Fecha Modificacion',
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

		$criteria->compare('id_opcion',$this->id_opcion);
		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('nombre_opcion',$this->nombre_opcion,true);
		$criteria->compare('descripcion_opcion',$this->descripcion_opcion,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('estado_opcion',$this->estado_opcion);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}