<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id
 * @property integer $comercio_id
 * @property integer $categoria_id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tiempo
 * @property integer $precio
 * @property string $imagen
 * @property integer $valoracion
 * @property integer $estado
 * @property string $fechacreacion
 * @property string $fechamodificacion
 *
 * The followings are the available model relations:
 * @property Opcion[] $opcions
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
			array('comercio_id, categoria_id', 'required'),
			array('comercio_id, categoria_id, tiempo, precio, valoracion, estado', 'numerical', 'integerOnly'=>true),
			array('nombre, descripcion', 'length', 'max'=>200),
                        array('imagen','file', 'types'=>'jpg, jpeg, gif, png', 'allowEmpty'=>TRUE, 'on'=>'insert,update'),
			array('fechamodificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, comercio_id, categoria_id, nombre, descripcion, tiempo, precio, imagen, valoracion, estado, fechacreacion, fechamodificacion', 'safe', 'on'=>'search'),
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
			'opcions' => array(self::HAS_MANY, 'Opcion', 'producto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comercio_id' => 'Comercio',
			'categoria_id' => 'Categoria',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'tiempo' => 'Tiempo',
			'precio' => 'Precio',
			'imagen' => 'Imagen',
			'valoracion' => 'Valoracion',
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
		$criteria->compare('comercio_id',$this->comercio_id);
		$criteria->compare('categoria_id',$this->categoria_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tiempo',$this->tiempo);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('valoracion',$this->valoracion);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('fechamodificacion',$this->fechamodificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}