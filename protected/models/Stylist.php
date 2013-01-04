<?php

/**
 * This is the model class for table "stylist".
 *
 * The followings are the available columns in table 'stylist':
 * @property integer $stylist_id
 * @property string $date
 * @property string $first_name
 * @property string $second_name
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $postcode
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property integer $experience
 * @property integer $current_position
 * @property integer $client_base
 * @property integer $qualifications
 * @property integer $cutting_skills
 * @property integer $colour_knowledge
 * @property integer $colour_skills
 * @property integer $extensions_weave
 * @property integer $extensions_ind
 * @property integer $extensions_other
 * @property integer $chem_straighten
 * @property integer $braz_blow
 * @property integer $hair_up
 * @property string $awards
 * @property string $about_you
 * @property string $why_hairdressing
 * @property string $why_jakata
 */
class Stylist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Stylist the static model class
	 */
	 
	 const CHOOSE = NULL;
	  
	 const EXPERIANCE_0TO2 = 1;
	 const EXPERIANCE_2TO4 = 2;
	 const EXPERIANCE_4TO8 = 3;
	 const EXPERIANCE_8TO10 = 4;
	 const EXPERIANCE_10PLUS = 5;
	 
	 const POSITION_GRADUATE = 1;
	 const POSITION_STYLIST = 2;
	 const POSITION_SENIOR = 3;
	 const POSITION_TOP = 4;
	 const POSITION_DIRECTOR = 5;
	 const POSITION_OTHER = 6;
	 
	 const CLIENTBASE_YES = 1;
	 const CLIENTBASE_NO = 0;
	 
	 const QUALIFICATION_NVQ1 = 1;
	 const QUALIFICATION_NVQ2 = 2;
	 const QUALIFICATION_NVQ3 = 3;
	 const QUALIFICATION_OTHER = 4;
	 
	 const LIST_ZERO = 0;
	 const LIST_ONE = 1;
	 const LIST_TWO = 2;
	 const LIST_THREE = 3;
	 const LIST_FOUR = 4;
	 const LIST_FIVE = 5;
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stylist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
		{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('first_name, second_name, address1, address3, postcode, email, mobile, experience, current_position, client_base, qualifications, cutting_skills, colour_knowledge, colour_skills, extensions_weave, extensions_ind, extensions_other, chem_straighten, braz_blow, hair_up, about_you, why_hairdressing, why_jakata', 'required'),
		array('experience, current_position, client_base, qualifications, cutting_skills, colour_knowledge, colour_skills, extensions_weave, extensions_ind, extensions_other, chem_straighten, braz_blow, hair_up', 'numerical', 'integerOnly'=>true),
			array('first_name, second_name, address1, address2, address3, email', 'length', 'max'=>256),
			array('postcode', 'length', 'max'=>20),
			array('phone, mobile', 'length', 'max'=>30),
			array('phone, mobile', 'numerical'),
			array('email', 'email'),
		array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('stylist_id, date, first_name, second_name, address1, address2, address3, postcode, email, phone, mobile, experience, current_position, client_base, qualifications, cutting_skills, colour_knowledge, colour_skills, extensions_weave, extensions_ind, extensions_other, chem_straighten, braz_blow, hair_up, awards, about_you, why_hairdressing, why_jakata', 'safe', 'on'=>'search'),
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
			'stylist_id' => 'Stylist',
			'date' => 'Date',
			'first_name' => 'First Name',
			'second_name' => 'Second Name',
			'address1' => 'Address 1',
			'address2' => 'Address 2',
			'address3' => 'Town/city',
			'postcode' => 'Postcode',
			'email' => 'Email Address',
			'phone' => 'Phone Number',
			'mobile' => 'Mobile Number',
			'experience' => 'How many years experience do you have?',
			'current_position' => 'Your Current Position',
			'client_base' => 'Do you have an existing client base?',
			'qualifications' => 'Hairdressing Qualifications',
			'cutting_skills' => 'Cutting Skills',
			'colour_knowledge' => 'Colour Knowledge',
			'colour_skills' => 'Colour Skills',
			'extensions_weave' => 'Extensions: Weave',
			'extensions_ind' => 'Extensions: Individual',
			'extensions_other' => 'Extensions: Other',
			'chem_straighten' => 'Chemical Straightening',
			'braz_blow' => 'Brazilian Blowdry',
			'hair_up' => 'Hair Up Styling',
			'awards' => 'Please state any hairdressing awards',
			'about_you' => 'Tell us a bit about yourself',
			'why_hairdressing' => 'Why did you choose to be a hairdresser?',
			'why_jakata' => 'Why do you want to join the Jakata Team?',
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

		$criteria->compare('stylist_id',$this->stylist_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('address3',$this->address3,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('experience',$this->experience);
		$criteria->compare('current_position',$this->current_position);
		$criteria->compare('client_base',$this->client_base);
		$criteria->compare('qualifications',$this->qualifications);
		$criteria->compare('cutting_skills',$this->cutting_skills);
		$criteria->compare('colour_knowledge',$this->colour_knowledge);
		$criteria->compare('colour_skills',$this->colour_skills);
		$criteria->compare('extensions_weave',$this->extensions_weave);
		$criteria->compare('extensions_ind',$this->extensions_ind);
		$criteria->compare('extensions_other',$this->extensions_other);
		$criteria->compare('chem_straighten',$this->chem_straighten);
		$criteria->compare('braz_blow',$this->braz_blow);
		$criteria->compare('hair_up',$this->hair_up);
		$criteria->compare('awards',$this->awards,true);
		$criteria->compare('about_you',$this->about_you,true);
		$criteria->compare('why_hairdressing',$this->why_hairdressing,true);
		$criteria->compare('why_jakata',$this->why_jakata,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getExperianceOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::EXPERIANCE_0TO2=>'0 to 2 years',
			self::EXPERIANCE_2TO4=>'2 to 4 years',
			self::EXPERIANCE_4TO8=>'4 to 8 years',
			self::EXPERIANCE_8TO10=>'8 to 10 years',
			self::EXPERIANCE_10PLUS=>'10 plus years',
		);
	}
	
	public function getPositionOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::POSITION_GRADUATE=>'Graduate Stylist',
			self::POSITION_STYLIST=>'Stylist',
			self::POSITION_SENIOR=>'Senior Stylist',
			self::POSITION_TOP=>'Top Stylist',
			self::POSITION_DIRECTOR=>'Director',
			self::POSITION_OTHER=>'Other',
		);
	}
	
	public function getClientbaseOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::CLIENTBASE_YES=>'Yes',
			self::CLIENTBASE_NO=>'No',
		);
	}
	
	public function getQualificationOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::QUALIFICATION_NVQ1=>'NVQ level 1',
			self::QUALIFICATION_NVQ2=>'NVQ level 2',
			self::QUALIFICATION_NVQ3=>'NVQ level 3',
			self::QUALIFICATION_OTHER=>'Other',
		);
	}
	
	public function getListOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::LIST_ONE=>'1',
			self::LIST_TWO=>'2',
			self::LIST_THREE=>'3',
			self::LIST_FOUR=>'4',
			self::LIST_FIVE=>'5',
			self::LIST_ZERO=>'I don\'t do this service',
		);
	}
	
	public function getExperianceText() {
		$experianceOptions=$this->experianceOptions;
		return isset($experianceOptions[$this->experience]) ? $experianceOptions[$this->experience] : "unknown position ({$this->experience})";
	}
	
	public function getPositionText() {
		$positionOptions=$this->positionOptions;
		return isset($positionOptions[$this->current_position]) ? $positionOptions[$this->current_position] : "unknown position ({$this->current_position})";
	}
	
	public function getClientbaseText() {
		$clientbaseOptions=$this->clientbaseOptions;
		return isset($clientbaseOptions[$this->client_base]) ? $clientbaseOptions[$this->client_base] : "unknown salon ({$this->client_base})";
	}
	
	public function getQualificationText() {
		$qualificationOptions=$this->qualificationOptions;
		return isset($qualificationOptions[$this->qualifications]) ? $qualificationOptions[$this->qualifications] : "unknown qualification ({$this->qualifications})";
	}
}






