<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property string $header
 * @property string $content
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $created_at
 * @property string $updated_at
 */
class Page extends CActiveRecord
{

  public static $patternTypes = [
      'index' => 'Index', 
      'portfolio' => 'Portfolio'
    ];

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Page the static model class
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
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
      ['menu_header, pattern', 'required'],

			['header, menu_header, slug, content, seo_title, seo_keywords,
        seo_description, pattern', 'safe'],
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			['id, header, content, slug, seo_title, seo_keywords, seo_description, 
        created_at, updated_at, pattern', 'safe', 'on'=>'search'],
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
      'pictures' => [self::HAS_MANY, 'Picture', 'resource_id'],
		];
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'header' => 'Header',
			'content' => 'Content',
			'slug' => 'Slug',
			'pattern' => 'Pattern / Template',
			'menu_header' => 'Menu Header',
			'seo_title' => 'Seo Title',
			'seo_keywords' => 'Seo Keywords',
			'seo_description' => 'Seo Description',
			'pattern' => 'pattern',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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
		$criteria->compare('header',$this->header,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('menu_header',$this->content,true);
		$criteria->compare('slug',$this->content,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_keywords',$this->seo_keywords,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('pattern',$this->updated_at,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


  // instance methods
  public function getPage($pageSlug = null) {

    $page = Page::model()->findByAttributes(['slug' => $pageSlug]);

    if(empty($page))
      $page = Page::model()->find('pattern=:pattern', [':pattern' => 'index']);

    return $page;
  }

  public function isHomePage() {
    return ($this->pattern == 'index') ? true : false;
  }

  public function behaviors() {
    return [
      'SlugBehavior' => [
        'class' => 'application.models.behaviors.SlugBehavior',
        'slug_col' => 'slug',
        'title_col' => 'menu_header',
        #'max_slug_chars' => 40,
        'overwrite' => true
      ]
    ];
  }

  public function getPagesForFormSelect() {
    $pages = Yii::app()->db->createCommand()
      ->select('id, slug')
      ->from('pages')
      ->queryAll();

      $result = [];
      foreach($pages as $value)
      {
        $result[$value['id']] = $value['slug'];
      }

    return $result;
  }

}



