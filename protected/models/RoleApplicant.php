<?php

/**
 * This is the model class for table "role_applicant".
 *
 * The followings are the available columns in table 'role_applicant':
 * @property integer $id
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
 * @property string $current_emp
 * @property string $current_emp_des
 * @property string $qual_school
 * @property string $qual_non_hair
 * @property string $adex1 (stock)
 * @property string $adex2 (management)
 * @property string $adex3 (training)
 * @property string $adex4 (reception)
 * @property string $adex5 (marketing)
 * @property string $adex6 (cservice)
 * @property integer $experience
 * @property integer $current_position
 * @property integer $client_base
 * @property integer $qual_hair
 * @property integer $cutting_skills
 * @property integer $colour_knowledge
 * @property integer $colour_skills
 * @property integer $men
 * @property integer $extensions_weave
 * @property integer $extensions_other
 * @property integer $chem_straighten
 * @property integer $braz_blow
 * @property integer $hair_up
 * @property string $awards
 * @property string $about_you
 * @property string $why_hairdressing
 * @property string $why_us
 */
 
class RoleApplicant extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Apprentice the static model class
	 */
	 
	 const CHOOSE = NULL;
	 
	 const EMP_IN = 1;
	 const EMP_OUT = 2;
	 const EMP_UNEMPLOYED = 3;
	 
	 const QUAL_SHOOL_UPTO4 = 1;
	 const QUAL_SHOOL_4PLUS = 2;
	 const QUAL_SHOOL_ALEVEL = 3;
	 const QUAL_SHOOL_OTHER = 4;
	 
	 const QUAL_HAIR_NVQ1 = 1;
	 const QUAL_HAIR_NVQ2 = 2;
	 const QUAL_HAIR_NVQ3 = 3;
	 const QUAL_HAIR_OTHER = 4;	
	 
	 const LIST_ZERO = 0;
	 const LIST_ONE = 1;
	 const LIST_TWO = 2;
	 const LIST_THREE = 3;
	 const LIST_FOUR = 4;
	 const LIST_FIVE = 5;
	 
	 const EXPERIANCE_0TO2 = 1;
	 const EXPERIANCE_2TO4 = 2;
	 const EXPERIANCE_4TO8 = 3;
	 const EXPERIANCE_8TO10 = 4;
	 const EXPERIANCE_10PLUS = 5;
	 const EXPERIANCE_0 = 6;
	 const EXPERIANCE_1 = 7;
	 const EXPERIANCE_2 = 8;
	 
	 const CLIENTBASE_YES = 1;
	 const CLIENTBASE_OUT = 2;
	 const CLIENTBASE_NO = 0;
	 
	 const POSITION_GRADUATE = 1;
	 const POSITION_STYLIST = 2;
	 const POSITION_SENIOR = 3;
	 const POSITION_TOP = 4;
	 const POSITION_DIRECTOR = 5;
	 
	 
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'role_applicant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, second_name, address1, address3, postcode, email, mobile, current_emp,  current_position, qual_school, experience, current_position, client_base, qual_hair, cutting_skills, colour_knowledge, colour_skills, men, extensions_weave, extensions_other, chem_straighten, braz_blow, hair_up, about_you, why_hairdressing, why_us', 'required'),
			array('current_position,  men, hair_up', 'numerical', 'integerOnly'=>true),
			array('first_name, second_name, address1, address2, address3, email', 'length', 'max'=>256),
			array('postcode', 'length', 'max'=>56),
			array('phone, mobile', 'length', 'max'=>11),
			array('phone, mobile', 'numerical'),
			array('email', 'email'),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date, first_name, second_name, address1, address2, address3, postcode, email, phone, mobile, current_position, in_salon, salon_name, men, extensions, chem_straightening, brazil_blow, hair_up, about, why_hairdressing, why_us', 'safe', 'on'=>'search'),
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
			'id' => 'Applicant',
			'date' => 'Date',
			'first_name' => 'First Name',
			'second_name' => 'Second Name',
			'address1' => 'Address 1',
			'address2' => 'Address 2',
			'address3' => 'Town',
			'postcode' => 'Postcode',
			'email' => 'Email Address',
			'phone' => 'Phone Number',
			'mobile' => 'Mobile Number',
			'current_emp' => 'What is your current employment status?',
			'current_emp_des'  => 'If employed, please tell us where',
			'qual_school'  => 'What qualification did you achieve at school',
			'qual_non_hair'  => 'Please state any non-hairdressing qualifications?',
			'adex1' => 'Stock',
			'adex2' => 'Management',
			'adex3' => 'Training',
			'adex4' => 'Reception',
			'adex5' => 'Marketing',
			'adex6' => 'Customer Service',
			'experience' => 'Experience',
			'client_base' => 'Client Base',
			'qual_hair' => 'Hair Qualifications',
			'current_position' => 'Current Position',
			'cutting_skills' => 'Cutting Skills',
			'colour_knowledge' => 'Colour Knowledge',
			'colour_skills' => 'Colour Skills',
			'men' => 'Men\'s Hairdressing',
			'extensions_weave' => 'Extensions: Weave',
			'extensions_other' => 'Extensions: Other',
			'chem_straighten' => 'Chemical Straightening',
			'braz_blow' => 'Brazilian Blowdry',
			'hair_up' => 'Hair Up Styling',
			'awards' => 'Please state any hairdressing awards',
			'about_you' => 'Tell us a bit about yourself',
			'why_hairdressing' => 'Why did you choose to be a hairdresser?',
			'why_us' => 'Why do you want to join the team?',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	 
	public function getExperianceOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::EXPERIANCE_0=>'None',
			self::EXPERIANCE_1=>'Up to 12 months',
			self::EXPERIANCE_2=>'1 to 2 years',
			//self::EXPERIANCE_0TO2=>'0 to 2 years',
			self::EXPERIANCE_2TO4=>'2 to 4 years',
			self::EXPERIANCE_4TO8=>'4 to 8 years',
			self::EXPERIANCE_8TO10=>'8 to 10 years',
			self::EXPERIANCE_10PLUS=>'10 plus years',
		);
	}
	
	public function getExperianceText() {
		$experianceOptions=$this->experianceOptions;
		return isset($experianceOptions[$this->experience]) ? $experianceOptions[$this->experience] : "unknown position ({$this->experience})";
	}
	 
		
	public function getEmploymentOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::EMP_IN=>'In hairdressing role',
			self::EMP_OUT=>'In non-hairdressing role',
			self::EMP_UNEMPLOYED=>'Unemployed',
		);
	}
	
	public function getEmploymentText() {
		$employmentOptions=$this->employmentOptions;
		return isset($employmentOptions[$this->current_emp]) ? $employmentOptions[$this->current_emp] : "unknown employment ({$this->current_emp})";
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
	
	
	public function getQualSchoolOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::QUAL_SHOOL_UPTO4=>'Up to 4 GCSE\'s',
			self::QUAL_SHOOL_4PLUS=>'4 or more GCSE\'s',
			self::QUAL_SHOOL_ALEVEL=>'1 or more A Level\'s',
			self::QUAL_SHOOL_OTHER=>'Other',
		);
	}
	
	public function getQualSchoolText() {
		$qualSchoolOptions=$this->qualSchoolOptions;
		return isset($qualSchoolOptions[$this->qualification_school]) ? $qualSchoolOptions[$this->qualification_school] : "unknown qualification ({$this->qualification_school})";
	}
	
	public function getClientbaseOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::CLIENTBASE_YES=>'Yes - local',
			self::CLIENTBASE_OUT=>'Yes - other area',
			self::CLIENTBASE_NO=>'No',
		);
	}
	
	public function getClientbaseText() {
		$clientbaseOptions=$this->clientbaseOptions;
		return isset($clientbaseOptions[$this->client_base]) ? $clientbaseOptions[$this->client_base] : "unknown option ({$this->client_base})";
	}
	
	
	public function getQualHairOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::QUAL_HAIR_NVQ1=>'Working towards NVQ Level 1',
			self::QUAL_HAIR_NVQ2=>'Working towards NVQ Level 2',
			self::QUAL_HAIR_NVQ3=>'Working towards NVQ Level 3',
			self::QUAL_HAIR_OTHER=>'Other',
		);
	}
	
	public function getQualHairText() {
		$qualHairOptions=$this->qualHairOptions;
		return isset($qualHairOptions[$this->qualification_hair]) ? $qualHairOptions[$this->qualification_hair] : "unknown qualification ({$this->qualification_hair})";
	}
	
}






