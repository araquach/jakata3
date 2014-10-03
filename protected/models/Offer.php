<?php

/**
 * This is the model class for table "offer". Used for special limited, personalised offers.
 *
 * The followings are the available columns in table 'offer':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property string $email
 * @property string $first_stylist
 * @property string $last_stylist
 * @property string $first_visit
 * @property string $last_visit
 * @property integer $gender
 * @property integer $number_visits
 * @property boolean $optout
 * @property datetime $date
 * @property integer $submitted
 * @property integer $offer
 */
class Offer extends CActiveRecord
{

	const OFFER_1 = 1;
	const OFFER_2 = 2;
	const OFFER_3 = 3;
	const OFFER_4 = 4;
	const OFFER_5 = 5;
	const OFFER_6 = 6;
	const OFFER_7 = 7;
	const OFFER_8 = 8;
	const OFFER_9 = 9;
	const OFFER_10 = 10;
	const OFFER_11 = 11;
	const OFFER_12 = 12;
	const OFFER_13 = 13;
	const OFFER_14= 14;
	const OFFER_15 = 15;
	const OFFER_16 = 16;
	const OFFER_17 = 17;
	const OFFER_18 = 18;
	const OFFER_18= 19;
	
	
	const DATE_1 = 1;
	const DATE_2 = 2;
	const DATE_3 = 3;
	const DATE_4 = 4;
	const DATE_5 = 5;
	const DATE_6 = 6;
	const DATE_7 = 7;
	const DATE_8 = 8;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Offer the static model class
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
		return 'offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('id, first_name, last_name, first_stylist, last_stylist, first_visit, last_visit, number_visits', 'required'),
			array('id, number_visits', 'numerical', 'integerOnly'=>true),
			array('optout', 'boolean'),
			// array('first_name, last_name, email, first_stylist, last_stylist', 'length', 'max'=>256),
			// array('mobile', 'length', 'max'=>16),
			// array('first_visit, last_visit', 'length', 'max'=>22),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'update'),
			// array('submitted', 'validateEntry'),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, mobile, email, first_stylist, last_stylist, first_visit, last_visit, gender, number_visits, optout, date, submitted', 'safe', 'on'=>'search'),
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
			'first_stylist' => 'First Stylist',
			'last_stylist' => 'Last Stylist',
			'first_visit' => 'First Visit',
			'last_visit' => 'Last Visit',
			'last_visit' => 'Gender',
			'number_visits' => 'Number Visits',
			'optout' => 'If you no longer wish to receive offers check the box then click \'GO\'',
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
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_stylist',$this->first_stylist,true);
		$criteria->compare('last_stylist',$this->last_stylist,true);
		$criteria->compare('first_visit',$this->first_visit,true);
		$criteria->compare('last_visit',$this->last_visit,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('number_visits',$this->number_visits);
		$criteria->compare('optout',$this->optout);
		$criteria->compare('date',$this->date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeSave()
	{
		$this->submitted = 1;
		
		return parent::beforeSave();
	}
	
	public function validateEntry($attr, $params)
	{
		if ($this->submitted == 1)
		{
			$this->addError('submitted', 'Sorry - you can only enter once');
		}
	}
	
	public function getOfferOptions()
	{
		return array(
			
			// Adam -> Maisie
			self::OFFER_1=>'<p>For appointments with Mat or Laura M:</p>
			<p><strong>Colour &amp; Cut for just &pound;??</strong></p>
			<p><strong>Cut, Dry &amp; Style for just &pound;??</strong></p>
			<p>Offer exclusively for <em>'.ucfirst($this->first_name).' '.ucfirst($this->last_name).'</em>.<br>With <em>Laura M &amp; Mat</em> only.<br>Not Transferable, limited to weekdays</p>',
			
			// Dan
			self::OFFER_2=>'<p>For appointments with Nat or Laura H:</p>
			<p><strong>Colour &amp; Cut for just &pound;??</strong></p>
			<p><strong>Cut, Dry &amp; Style for just &pound;??</strong></p>
			<p>Offer exclusively for <em>'.ucfirst($this->first_name).' '.ucfirst($this->last_name).'</em>.<br>With <em>Nat or Laura H</em> only.<br>Not Transferable, limited to weekdays</p>',
			
			// Jim -> Stylists
			self::OFFER_3=>'<p>For appointments with Jimmy, Maisie or Dan:</p>
			<p><strong>Colour &amp; Cut for just &pound;??</strong></p>
			<p><strong>Cut, Dry &amp; Style for just &pound;??</strong></p>
			<p>Offer exclusively for <em>'.ucfirst($this->first_name).' '.ucfirst($this->last_name).'</em>.<br>With <em>Jimmy, Maisie or Dan</em> only.<br>Not Transferable, limited to weekdays</p>',
			// Jim -> Keep/Maisie
			self::OFFER_4=>'<p><strong><span style="font-size: 34px; line-height: 1.5em;">25% OFF</span><br>the total bill on your next visit</strong></p>
			<p>Offer exclusively for <em>'.ucfirst($this->first_name).' '.ucfirst($this->last_name).'</em> only.<br>Not Transferable, weekdays only </p>',
			
			// Katie -> stylists
			self::OFFER_5=>'<p><strong><span style="font-size: 34px; line-height: 1.5em;">25% OFF</span><br>the total bill on your next visit</strong></p>
			<p>Offer exclusively for <em>'.ucfirst($this->first_name).' '.ucfirst($this->last_name).'</em> only.<br>Not Transferable, weekdays only </p>',
			
			// Laura -> Back to Laura (high visits)
			self::OFFER_6=>'',
			// Laura -> Low Visits to graduates
			self::OFFER_7=>'',
			
			// Maisie -> High Visits to Maisie
			self::OFFER_8=>'',
			// Maisie -> Low Visits to stylists
			self::OFFER_9=>'',
			
			// Michelle Ash -> Maisie
			self::OFFER_10=>'',
			
			// Mikala -> Graduates
			self::OFFER_11=>'',
			
			// Nat 2012 & 2013 low to grads
			self::OFFER_12=>'',
			// 2013 High -> Nat
			self::OFFER_13=>'',
			
			// Beauty Therapist -> 25% off
			self::OFFER_14=>'',
			
			// Shelly -> Double Offer? Senior/stylists
			self::OFFER_15=>'',
			
			// Sophie -> Ashley
			self::OFFER_16=>'',
			
			// Vick -> High Visit to Vick
			self::OFFER_17=>'',
			// Vick Low visit to  stylists/grads
			self::OFFER_18=>'',
			
			self::OFFER_19=>'',
		);
	}
	
	public function getOfferText() {
		$offerOptions=$this->offerOptions;
		return isset($offerOptions[$this->offer]) ? $offerOptions[$this->offer] : '<p style="font-size: 22px;"><strong><span style="font-size: 34px; line-height: 1.5em;">30% OFF</span><br>your next visit</strong></p>
		<p>Offer exclusively for <strong>'.ucfirst($this->first_name).' '.ucfirst($this->last_name).'</strong> only.<br>Not Transferable, weekdays only </p>
		<p><strong>Call 01925 242960 to book and mention the offer</strong></p>
		<p style="font-size: 10px;">Please present this when paying (either a printout or show it on your smart phone)<br>Offer ends: November 28th 2014</p>';
	}
	
	public function getOfferCodeOptions() {
		return array(
			self::OFFER_1=>'G-IMCCP14 for Colour &amp; Cut<br>G-IMCP14 for a Cut, Dry &amp; Style',
			self::OFFER_2=>'S-IMCCP14 for Colour &amp; Cut<br>S-IMCP14 for a Cut, Dry &amp; Style',
			self::OFFER_3=>'SS-IMCCP14 for Colour &amp; Cut<br>SS-IMCP14 for a Cut, Dry &amp; Style',
			self::OFFER_4=>'IMPD2514', // women 25%
			self::OFFER_5=>'IMMPD2514', // men 25%
		);
	}
	
	public function getOfferCodeText() {
		$offerCodeOptions=$this->offerCodeOptions;
		return isset($offerCodeOptions[$this->offer]) ? $offerCodeOptions[$this->offer] : 'XXXX';
	}
	
	public function getDateOptions() {
		return array(
		self::DATE_1=>'11th October 2014',
		self::DATE_2=>'18th October 2014',
		self::DATE_3=>'25th October 2014',
		self::DATE_4=>'7th November 2014',
		self::DATE_5=>'14th November 2014',
		self::DATE_6=>'21st November 2014',
		self::DATE_7=>'28th November 2014',
		self::DATE_8=>'5th December 2014',
		);
	}
	
	public function getDateText() {
		$dateOptions = $this->dateOptions;
		return isset($dateOptions[$this->batch]) ? $dateOptions[$this->batch] : '21st November 2014';
	}
	
	
		
}