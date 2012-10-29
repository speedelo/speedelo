<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id_producto
 * @property integer $id_proveedor
 * @property integer $id_categoria
 * @property string $nombre_producto
 * @property string $descripcion_producto
 * @property integer $tiempo_minimo_producto
 * @property integer $precio_producto
 * @property string $imagen_producto
 * @property integer $valoracion_producto
 * @property integer $estado_producto
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 */
class Producto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Producto the static model class
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
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proveedor, id_categoria, fecha_creacion', 'required'),
			array('id_proveedor, id_categoria, tiempo_minimo_producto, precio_producto, valoracion_producto, estado_producto', 'numerical', 'integerOnly'=>true),
			array('nombre_producto, descripcion_producto', 'length', 'max'=>200),
			array('imagen_producto', 'length', 'max'=>200),
			array('fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_producto, id_proveedor, id_categoria, nombre_producto, descripcion_producto, tiempo_minimo_producto, precio_producto, imagen_producto, valoracion_producto, estado_producto, fecha_creacion, fecha_modificacion', 'safe', 'on'=>'search'),
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
			'id_producto' => 'Id Producto',
			'id_proveedor' => 'Id Proveedor',
			'id_categoria' => 'Id Categoria',
			'nombre_producto' => 'Nombre Producto',
			'descripcion_producto' => 'Descripcion Producto',
			'tiempo_minimo_producto' => 'Tiempo Minimo Producto',
			'precio_producto' => 'Precio Producto',
			'imagen_producto' => 'Imagen Producto',
			'valoracion_producto' => 'Valoracion Producto',
			'estado_producto' => 'Estado Producto',
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

		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('id_proveedor',$this->id_proveedor);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('nombre_producto',$this->nombre_producto,true);
		$criteria->compare('descripcion_producto',$this->descripcion_producto,true);
		$criteria->compare('tiempo_minimo_producto',$this->tiempo_minimo_producto);
		$criteria->compare('precio_producto',$this->precio_producto);
		$criteria->compare('imagen_producto',$this->imagen_producto,true);
		$criteria->compare('valoracion_producto',$this->valoracion_producto);
		$criteria->compare('estado_producto',$this->estado_producto);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}