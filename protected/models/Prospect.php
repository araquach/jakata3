<?php

/**
 * This is the model class for table "prospect".
 *
 * The followings are the available columns in table 'competition':
 * @property integer $id
 * @property string $first_name
 * @property string $second_name
 * @property string $email
 * @property string $mobile
 * @property string $address1
 * @property string $address2
 * @property string $town
 * @property string $postcode
 * @property integer $regular
 * @property integer $hair_texture
 * @property integer $hair_condition
 * @property integer $cut_spend
 * @property integer $colour_spend
 * @property integer $date
 */
class Prospect extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Competition the static model class
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
		return 'prospect';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, second_name, email, mobile, address1, town, postcode, regular, hair_texture, hair_condition, cut_spend, colour_spend', 'required'),
			array('first_name, second_name, email, address1, address2, town,', 'length', 'max'=>256),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			array('mobile', 'length', 'max'=>22),
			array('mobile', 'numerical', 'integerOnly'=>true, 'message'=>'Please enter your mobile number without any spaces'),
			array('regular', 'boolean'),
			array('email', 'email', 'message'=>'Please give a valid email address'),
			array('email, mobile', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, second_name, email, mobile, address1, address2, town, postcode, hair_texture, hair_condition, cut_spend, colour_spend, regular, date', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'first_name' => 'First Name',
			'second_name' => 'Last Name',
			'email' => 'Email Address',
			'mobile' => 'Mobile Number',
			'address1' => 'Address 1',
			'address2' => 'Address 2',
			'town' => 'Town/City',
			'postcode' => 'Postcode',
			'hair_texture' => 'Hair Texture',
			'hair_condition' => 'Hair Condition',
			'cut_spend' => 'How much do you normally spend on a haircut?',
			'colour_spend' => 'How much do you normally spend on a hair colour?',
			'regular' => 'Check the box if you have been to the salon before',
			'date' => 'Date',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('town',$this->town,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('hair_texture',$this->hair_texture,true);
		$criteria->compare('hair_condition',$this->hair_condition,true);
		$criteria->compare('cut_spend',$this->cut_spend,true);
		$criteria->compare('colour_spend',$this->colour_spend,true);
		$criteria->compare('regular',$this->regular);
		$criteria->compare('date',$this->date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}