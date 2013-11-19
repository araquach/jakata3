<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $title
 * @property string $anchor
 * @property string $date
 * @property string $author
 * @property string $unhidden
 * @property string $unhid_img
 * @property string $hidden
 * @property string $hidden_img
 * @property string $offer
 * @property integer $publish
 */
class News extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
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
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, title, anchor, author, unhidden, unhid_img, hidden, publish', 'required'),
			array('publish, unhid_img, hidden_img', 'numerical', 'integerOnly'=>true),
			array('title, anchor, author', 'length', 'max'=>256),
			array('offer', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, anchor, date, author, unhidden, unhid_img, hidden, hidden_img, offer, publish', 'safe', 'on'=>'search'),
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
			'unhidImg' => array(self::BELONGS_TO, 'Image', 'unhid_img'),
			'images' => array(self::MANY_MANY, 'Image', 'news_image(news_id,image_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'anchor' => 'Anchor Tag (no spaces)',
			'date' => 'Date',
			'author' => 'Author',
			'unhidden' => 'This is the visible content',
			'unhid_img' => 'Unhid Img',
			'hidden' => 'This is the hidden content',
			'hidden_img' => 'Hidden Img',
			'offer' => 'Offer',
			'publish' => 'Publish',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('anchor',$this->anchor,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('unhidden',$this->unhidden,true);
		$criteria->compare('unhid_img',$this->unhid_img,true);
		$criteria->compare('hidden',$this->hidden,true);
		$criteria->compare('hidden_img',$this->hidden_img,true);
		$criteria->compare('offer',$this->offer,true);
		$criteria->compare('publish',$this->publish);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function behaviors(){
	        return array('ESaveRelatedBehavior' => array(
	         'class' => 'application.components.ESaveRelatedBehavior')
	     );
	}
}