<?php

/**
 * This is the model class for table "givaway".
 *
 * The followings are the available columns in table 'givaway':
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property string $email
 * @property string $gift
 * @property string $text
 * @property string $extra
 */
class Givaway extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Givaway the static model class
	 */
	 
	 const PRIZE_0 = 0;
	 const PRIZE_1 = 1;
	 const PRIZE_2 = 2;
	 const PRIZE_3 = 3;
	 const PRIZE_4 = 4;
	 const PRIZE_5 = 5;
	 const PRIZE_6 = 6;
	 const PRIZE_7 = 7;
	 const PRIZE_8 = 8;
	 const PRIZE_9 = 9;
	 const PRIZE_10 = 10;
	 const PRIZE_11 = 11;
	 const PRIZE_12 = 12;
	 const PRIZE_13 = 13;
	 const PRIZE_14 = 14;
	 const PRIZE_15 = 15;
	 
	 const OFFER_0 = 0;
	 const OFFER_25 = 25;
	 const OFFER_26 = 26;
	 
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'givaway';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, first_name, last_name, mobile, email, gift, text', 'required'),
			array('id, gift, text', 'length', 'max'=>11),
			array('first_name, last_name, extra', 'length', 'max'=>256),
			array('mobile', 'length', 'max'=>30),
			array('email', 'length', 'max'=>55),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, mobile, email, gift, text, extra', 'safe', 'on'=>'search'),
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
			'mobile' => 'Mobile',
			'email' => 'Email',
			'gift' => 'Gift',
			'text' => 'Text',
			'extra' => 'Extra',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('gift',$this->gift,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('extra',$this->extra,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getPrizeOptions() {
		return array(
			self::PRIZE_0=>'',
			self::PRIZE_1=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A Men\'s Shampoo &amp; Styling product</strong></p>
			 <p style="font-size: .9em; margin-top: 0; margin-bottom: 10px;"><strong>Worth over &pound;15</strong></p>
			 <p style="font-size: 1.4em; margin-top: 0; margin-bottom: 5px;"><strong>PLUS</strong></p>
			 <p style="font-size: 1.4em; margin-top: 10px; margin-bottom: 0;"><strong>30% off a Men\'s Cut &amp; Style!</strong></p>',
			
			self::PRIZE_2=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A selection of men\'s products</strong></p>
			 <p style="font-size: .9em; margin-top: 0; margin-bottom: 10px;"><strong>worth over &pound;20!</strong></p>',
			
			self::PRIZE_3=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A &pound;10 product voucher</strong></p>',
			
			self::PRIZE_4=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A Shampoo &amp; Conditioner</strong></p>
			 <p style="font-size: .9em; margin-top: 0; margin-bottom: 10px;"><strong>worth over &pound;20!</strong></p>',
			
			self::PRIZE_5=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A &pound;30 Voucher!</strong></p>
			 <p style="font-size: .9em; margin-top: 0; margin-bottom: 10px;"><strong>to use on any service in the salon</strong></p>',
			
			self::PRIZE_6=>'',
			
			self::PRIZE_7=>'',
			
			self::PRIZE_8=>'',
			
			self::PRIZE_9=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A Kebelo Smoothing Treatment</strong></p>
			 <p style="font-size: .9em; margin-top: 10px; margin-bottom: 10px;"><strong>worth over &pound;100!</strong></p>
			 <p style="font-size: 1.4em; margin-top: 10px; margin-bottom: 0;"><strong>with any of our stylists</strong></p>',
			
			self::PRIZE_10=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A Tangle Teezer</strong></p>
			 <p style="font-size: .9em; margin-top: 10px; margin-bottom: 10px;"><strong>worth over &pound;10!</strong></p>',
			
			self::PRIZE_11=>'',
			
			self::PRIZE_12=>'<p style="font-size: 1.4em; line-height 1.4em; margin: 0; margin-top: 20px"><strong>A FREE in salon Colour Service</strong></p>
			 <p style="font-size: 1.2em; margin-top: 10px; margin-bottom: 0;"><strong>with any of our stylists</strong></p>',
			
			self::PRIZE_13=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A FREE Blow Dry</strong></p>
			 <p style="font-size: 1.2em; margin-top: 10px; margin-bottom: 0;"><strong>with any of our stylists</strong></p>',
			
			self::PRIZE_14=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A FREE Cut, Dry &amp; Style</strong></p>
			 <p style="font-size: 1.2em; margin-top: 10px; margin-bottom: 0;"><strong>with any of our stylists</strong></p>',
			
			self::PRIZE_15=>'<p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>A Styling Product</strong></p>
			 <p style="font-size: .9em; margin-top: 10px; margin-bottom: 10px;"><strong>worth over &pound;10!</strong></p>',
		);
	}
	
	public function getPrizeText() {
		$prizeOptions=$this->prizeOptions;
		return isset($prizeOptions[$this->gift]) ? $prizeOptions[$this->gift] : "unknown prize ({$this->gift})";
	}
	
	public function getOfferOptions() {
		return array(
			self::OFFER_0=>'',
			self::OFFER_25=>'<p style="font-size: 1.4em; margin-top: 20px; margin-bottom: 5px;"><strong>PLUS also claim</strong></p>
			 <p style="font-size: 1.6em; margin: 0; margin-top: 20px"><strong>50% off</strong></p>
			 <p style="font-size: 1.4em; margin-top: 10px; margin-bottom: 0;"><strong>any Colour Service</strong></p>
			 <p style="font-size: 0.8em; margin-top: 10px; margin-bottom: 0;">before 31/01/2014, not with any other offer</p>',
			self::OFFER_26=>'<p style="font-size: 1.4em; margin-top: 20px; margin-bottom: 5px;"><strong>PLUS also claim</strong></p>
			 <p style="font-size: 1.4em; margin: 0; margin-top: 20px"><strong>3 visits to the salon</strong></p>
			 <p style="font-size: 1.2em; margin-top: 10px; margin-bottom: 0;"><strong>with a fixed price of:</strong></p>
			 <p style="font-size: 1.2em; margin-top: 10px; margin-bottom: 0;"><strong>&pound;15 for a Cut, Dry &amp; Style</strong></p>
			 <p style="font-size: 1.2em; margin-top: 10px; margin-bottom: 0;"><strong>&pound;25 for a Colour Service</strong></p>
			  <p style="font-size: 0.8em; margin-top: 10px; margin-bottom: 0;">(not with any other offer)</p>',
			
		);
	}
	
	public function getOfferText() {
		$offerOptions=$this->offerOptions;
		return isset($offerOptions[$this->text]) ? $offerOptions[$this->text] : "unknown offer ({$this->text})";
	}
	
	
}