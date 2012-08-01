<?php

/**
 * This is the model class for table "pictures".
 *
 * The followings are the available columns in table 'pictures':
 * @property integer $id
 * @property string $file_name
 * @property string $extension
 * @property string $size
 * @property string $mime_type
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $resource_type
 * @property string $resource_id
 */
class Picture extends CActiveRecord
{

  private $resizeMatches = ['50x50', '80x80', '120x120'];

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Picture the static model class
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
		return 'pictures';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
      # required only on create
      ['file_name', 'file', 'types' => 'jpg, gif, png', 'on' => 'create'], 
      # not required on other actions (like update)
      ['file_name', 'file', 'allowEmpty' => true, 'types' => 'jpg, gif, png'],
			['file_name', 'unsafe'],

			array('extension, size, mime_type, description', 'length', 'max'=>255),
			array('resource_type, resource_id', 'length', 'max'=>40),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, file_name, extension, size, mime_type, description, created_at, 
            updated_at, resource_type, resource_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return [
      'page' => [self::BELONGS_TO, 'Page', 'resource_id'],
		];
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id'            => 'ID',
			'file_name'     => 'File Name',
			'extension'     => 'Extension',
			'size'          => 'Size',
			'mime_type'     => 'Mime Type',
			'description'   => 'Description',
			'created_at'    => 'Created At',
			'updated_at'    => 'Updated At',
			'resource_type' => 'Resource Type',
			'resource_id'   => 'Resource',
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
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('extension',$this->extension,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('mime_type',$this->mime_type,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('resource_type',$this->resource_type,true);
		$criteria->compare('resource_id',$this->resource_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

  public function resize() {
    foreach($this->resizeMatches as $value)
    {
      $thumb = Yii::app()->phpThumb->create("public/uploads/images/{$this->id}/{$this->file_name}");

      @mkdir("public/uploads/images/{$this->id}/{$value}", 0700);

      $matches = explode("x", $value);
      $thumb->resize($matches[0], $matches[1]);

      $thumb->save("public/uploads/images/{$this->id}/{$value}/{$this->file_name}");
    }
  }
}



