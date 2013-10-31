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
class SurveyFemale extends Survey
{
	const PRICE_10 = 1;
	const PRICE_10_20 = 2;
	const PRICE_21_30 = 3;
	const PRICE_31_40 = 4;
	const PRICE_41_50 = 5;
	const PRICE_51_60 = 6;
	const PRICE_61_70 = 7;
	
	const PRICE_60_PLUS = 8;
	const PRICE_70_PLUS = 9;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Survey the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	function defaultScope(){
	        return array(
	            'condition'=>"type='female'",
	        );
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
			array('email, mobile', 'unique'),
			array('email','email'),
			array('first_name', 'length', 'max'=>30),
			array('last_name', 'length', 'max'=>40),
			array('age', 'length', 'max'=>7),
			array('mobile', 'length', 'max'=>20),
			array('email', 'length', 'max'=>55),
			array('location', 'length', 'max'=>26),
			array('frequency, salon', 'length', 'max'=>21),
			array('cut_spend', 'length', 'max'=>14),
			array('products', 'length', 'max'=>19),
			array('type','default','value'=>'female','setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, age, mobile, email, location, frequency, stylist, salon, other_salon, cut_spend, colour_spend, stylist_skill, friendliness, price, customer_service, environment, convenience, reputation, end_result, poor_service, comp_offer, hygiene, boredom, products', 'safe', 'on'=>'search'),
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
			'mobile' => 'Mobile Number',
			'email' => 'Email',
			'location' => 'Where do you live?',
			'frequency' => 'How frequently do you have your hair done?',
			'stylist' => 'Do you have the same stylist/stylists every time?',
			'salon' => 'Which salon do you currently go to?',
			'other_salon' => 'If other please state',
			'cut_spend' => 'What is your average spend on a cut & blow?',
			'colour_spend' => 'If you have a colour service, what is your average spend on your colour?',
			'stylist_skill' => 'Stylist Skill',
			'friendliness' => 'Friendliness of Stylist',
			'price' => 'Price',
			'customer_service' => 'Customer Service',
			'environment' => 'Environment',
			'convenience' => 'Convenience',
			'reputation' => 'Reputation',
			'end_result' => 'End Result',
			'poor_service' => 'Poor Service',
			'comp_offer' => 'Offers at another salon',
			'hygiene' => 'Hygiene standards',
			'boredom' => 'Not being given new style ideas',
			'products' => 'Where do you mainly buy your hair products from?',
		);
	}
	
	public function getPriceOptions() {
		return array(
			self::PRICE_10=>'£10',
			self::PRICE_10_20=>'£10-£20',
			self::PRICE_21_30=>'£21-£30',
			self::PRICE_31_40=>'£31-£40',
			self::PRICE_41_50=>'£41-£50',
			self::PRICE_51_60=>'£51-£60',
			self::PRICE_60_PLUS=>'More than £60',
		);
		
	}
	
	public function getColPriceOptions() {
		return array(
			self::PRICE_10=>'£10',
			self::PRICE_10_20=>'£10-£20',
			self::PRICE_21_30=>'£21-£30',
			self::PRICE_31_40=>'£31-£40',
			self::PRICE_41_50=>'£41-£50',
			self::PRICE_51_60=>'£51-£60',
			self::PRICE_61_70=>'£61-£70',
			self::PRICE_70_PLUS=>'More than £70',
		);
		
	}
	

}