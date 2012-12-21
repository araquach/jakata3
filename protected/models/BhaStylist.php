<?php

/**
 * This is the model class for table "bha_stylist".
 *
 * The followings are the available columns in table 'bha_stylist':
 * @property integer $id
 * @property string $stylist
 * @property integer $salon
 */
class BhaStylist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BhaStylist the static model class
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
		return 'bha_stylist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stylist, salon', 'required'),
			array('salon', 'numerical', 'integerOnly'=>true),
			array('stylist', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, stylist, salon', 'safe', 'on'=>'search'),
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
			'BhaInput' => array(self::HAS_MANY, 'BhaStylist', 'stylist_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'stylist' => 'Your Stylist',
			'salon' => 'Salon',
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
		$criteria->compare('stylist',$this->stylist,true);
		$criteria->compare('salon',$this->salon);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}