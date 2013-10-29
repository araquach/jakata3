<?php

/**
 * This is the model class for table "survey".
 *
 * The followings are the available columns in table 'survey':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $age
 * @property string $mobile
 * @property string $email
 * @property string $location
 * @property string $frequency
 * @property integer $stylist
 * @property string $salon
 * @property integer $other_salon
 * @property string $cut_spend
 * @property integer $colour_spend
 * @property integer $stylist_skill
 * @property integer $friendliness
 * @property integer $price
 * @property integer $customer_service
 * @property integer $environment
 * @property integer $convenience
 * @property integer $reputation
 * @property integer $end_result
 * @property integer $poor_service
 * @property integer $comp_offer
 * @property integer $hygiene
 * @property integer $boredom
 * @property string $products
 */
class Survey extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Survey the static model class
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
		return 'survey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, age, mobile, email, location, frequency, stylist, salon, cut_spend, colour_spend, stylist_skill, friendliness, price, customer_service, environment, convenience, reputation, end_result, poor_service, comp_offer, hygiene, boredom, products', 'required'),
			array('stylist, other_salon, colour_spend, stylist_skill, friendliness, price, customer_service, environment, convenience, reputation, end_result, poor_service, comp_offer, hygiene, boredom', 'numerical', 'integerOnly'=>true),
			array('first_name', 'length', 'max'=>30),
			array('last_name', 'length', 'max'=>40),
			array('age', 'length', 'max'=>7),
			array('mobile', 'length', 'max'=>20),
			array('email', 'length', 'max'=>55),
			array('location', 'length', 'max'=>26),
			array('frequency, salon', 'length', 'max'=>21),
			array('cut_spend', 'length', 'max'=>14),
			array('products', 'length', 'max'=>19),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, age, mobile, email, location, frequency, stylist, salon, other_salon, cut_spend, colour_spend, stylist_skill, friendliness, price, customer_service, environment, convenience, reputation, end_result, poor_service, comp_offer, hygiene, boredom, products', 'safe', 'on'=>'search'),
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
			'last_name' => 'Last Name',
			'age' => 'Age',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'location' => 'Location',
			'frequency' => 'Frequency',
			'stylist' => 'Stylist',
			'salon' => 'Salon',
			'other_salon' => 'Other Salon',
			'cut_spend' => 'Cut Spend',
			'colour_spend' => 'Colour Spend',
			'stylist_skill' => 'Stylist Skill',
			'friendliness' => 'Friendliness',
			'price' => 'Price',
			'customer_service' => 'Customer Service',
			'environment' => 'Environment',
			'convenience' => 'Convenience',
			'reputation' => 'Reputation',
			'end_result' => 'End Result',
			'poor_service' => 'Poor Service',
			'comp_offer' => 'Comp Offer',
			'hygiene' => 'Hygiene',
			'boredom' => 'Boredom',
			'products' => 'Products',
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
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('frequency',$this->frequency,true);
		$criteria->compare('stylist',$this->stylist);
		$criteria->compare('salon',$this->salon,true);
		$criteria->compare('other_salon',$this->other_salon);
		$criteria->compare('cut_spend',$this->cut_spend,true);
		$criteria->compare('colour_spend',$this->colour_spend);
		$criteria->compare('stylist_skill',$this->stylist_skill);
		$criteria->compare('friendliness',$this->friendliness);
		$criteria->compare('price',$this->price);
		$criteria->compare('customer_service',$this->customer_service);
		$criteria->compare('environment',$this->environment);
		$criteria->compare('convenience',$this->convenience);
		$criteria->compare('reputation',$this->reputation);
		$criteria->compare('end_result',$this->end_result);
		$criteria->compare('poor_service',$this->poor_service);
		$criteria->compare('comp_offer',$this->comp_offer);
		$criteria->compare('hygiene',$this->hygiene);
		$criteria->compare('boredom',$this->boredom);
		$criteria->compare('products',$this->products,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}