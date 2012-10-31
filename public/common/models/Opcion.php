<?php

/**
 * This is the model class for table "opcion".
 *
 * The followings are the available columns in table 'opcion':
 * @property integer $id
 * @property integer $producto_id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $stock
 * @property integer $estado
 * @property string $fechacreacion
 * @property string $fechamodificacion
 *
 * The followings are the available model relations:
 * @property Producto $producto
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
			array('producto_id, nombre, stock, fechacreacion', 'required'),
			array('producto_id, stock, estado', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>200),
			array('descripcion', 'length', 'max'=>250),
			array('fechamodificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, producto_id, nombre, descripcion, stock, estado, fechacreacion, fechamodificacion', 'safe', 'on'=>'search'),
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
			'producto' => array(self::BELONGS_TO, 'Producto', 'producto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'producto_id' => 'Producto',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'stock' => 'Stock',
			'estado' => 'Estado',
			'fechacreacion' => 'Fechacreacion',
			'fechamodificacion' => 'Fechamodificacion',
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
		$criteria->compare('producto_id',$this->producto_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('fechamodificacion',$this->fechamodificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}