<?php

/**
 * This is the model class for table "apprentice".
 *
 * The followings are the available columns in table 'apprentice':
 * @property integer $apprentice_id
 * @property string $date
 * @property string $first_name
 * @property string $second_name
 * @property integer $age
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $postcode
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property integer $current_position
 * @property integer $in_salon
 * @property string $salon_name
 * @property integer $qualification_school
 * @property integer $qualification_hair
 * @property integer $cutting
 * @property integer $styling
 * @property integer $colouring
 * @property integer $extensions
 * @property integer $chem_straightening
 * @property integer $brazil_blow
 * @property integer $hair_up
 * @property string $about
 * @property string $why_hairdressing
 * @property string $why_jakata
 */
class Apprentice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Apprentice the static model class
	 */
	 
	 const CHOOSE = NULL;
	 
	 const POSITION_Y1 = 1;
	 const POSITION_Y2 = 2;
	 const POSITION_OTHER = 3;
	 
	 const IN_SALON_YES = 1;
	 const IN_SALON_NO = 0;
	 
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
	 
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apprentice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, second_name, age, address1, address3, postcode, email, mobile, current_position, in_salon, qualification_school, qualification_hair, cutting, styling, colouring, extensions, chem_straightening, brazil_blow, hair_up, about, why_hairdressing, why_jakata', 'required'),
			array('age, current_position, in_salon, qualification_school, qualification_hair, cutting, styling, colouring, extensions, chem_straightening, brazil_blow, hair_up', 'numerical', 'integerOnly'=>true),
			array('first_name, second_name, address1, address2, address3, email, salon_name', 'length', 'max'=>256),
			array('postcode', 'length', 'max'=>56),
			array('phone, mobile', 'length', 'max'=>11),
			array('phone, mobile', 'numerical'),
			array('email', 'email'),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('apprentice_id, date, first_name, second_name, age, address1, address2, address3, postcode, email, phone, mobile, current_position, in_salon, salon_name, qualification_school, qualification_hair, cutting, styling, colouring, extensions, chem_straightening, brazil_blow, hair_up, about, why_hairdressing, why_jakata', 'safe', 'on'=>'search'),
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
			'apprentice_id' => 'Apprentice',
			'date' => 'Date',
			'first_name' => 'First Name',
			'second_name' => 'Second Name',
			'age' => 'Age',
			'address1' => 'Address 1',
			'address2' => 'Address 2',
			'address3' => 'Town',
			'postcode' => 'Postcode',
			'email' => 'Email Address',
			'phone' => 'Phone Number',
			'mobile' => 'Mobile Number',
			'current_position' => 'Current Position',
			'in_salon' => 'Are you currently working in a salon?',
			'salon_name' => 'If yes please state the salon name',
			'qualification_school' => 'What qualification did you achieve at school?',
			'qualification_hair' => 'Are you currently doing any hairdressing qualifications?',
			'cutting' => 'Cutting Hair',
			'styling' => 'Hair Styling',
			'colouring' => 'Colouring Hair',
			'extensions' => 'Extensions',
			'chem_straightening' => 'Chemical Straightening',
			'brazil_blow' => 'Brazilian Blowdrys',
			'hair_up' => 'Hair Up Styling',
			'about' => 'Tell us a bit about yourself',
			'why_hairdressing' => 'Why did you choose hairdressing as a career?',
			'why_jakata' => 'What makes you want to join the Jakata Team?',
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

		$criteria->compare('apprentice_id',$this->apprentice_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('address3',$this->address3,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('current_position',$this->current_position);
		$criteria->compare('in_salon',$this->in_salon);
		$criteria->compare('salon_name',$this->salon_name,true);
		$criteria->compare('qualification_school',$this->qualification_school);
		$criteria->compare('qualification_hair',$this->qualification_hair);
		$criteria->compare('cutting',$this->cutting);
		$criteria->compare('styling',$this->styling);
		$criteria->compare('colouring',$this->colouring);
		$criteria->compare('extensions',$this->extensions);
		$criteria->compare('chem_straightening',$this->chem_straightening);
		$criteria->compare('brazil_blow',$this->brazil_blow);
		$criteria->compare('hair_up',$this->hair_up);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('why_hairdressing',$this->why_hairdressing,true);
		$criteria->compare('why_jakata',$this->why_jakata,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getPositionOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::POSITION_Y1=>'1st Year Apprentice',
			self::POSITION_Y2=>'Second Year Apprentice',
			self::POSITION_OTHER=>'Other',
		);
	}
	
	public function getInSalonOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::IN_SALON_YES=>'Yes',
			self::IN_SALON_NO=>'No',
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
	
	public function getQualHairOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::QUAL_HAIR_NVQ1=>'Working towards NVQ Level 1',
			self::QUAL_HAIR_NVQ2=>'Working towards NVQ Level 2',
			self::QUAL_HAIR_NVQ3=>'Working towards NVQ Level 3',
			self::QUAL_HAIR_OTHER=>'Other',
		);
	}
	
	public function getListOptions() {
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::LIST_ZERO=>'0',
			self::LIST_ONE=>'1',
			self::LIST_TWO=>'2',
			self::LIST_THREE=>'3',
			self::LIST_FOUR=>'4',
			self::LIST_FIVE=>'5',
		);
	}
	
	public function getPositionText() {
		$positionOptions=$this->positionOptions;
		return isset($positionOptions[$this->current_position]) ? $positionOptions[$this->current_position] : "unknown position ({$this->current_position})";
	}
	
	public function getInSalonText() {
		$inSalonOptions=$this->inSalonOptions;
		return isset($inSalonOptions[$this->in_salon]) ? $inSalonOptions[$this->in_salon] : "unknown salon ({$this->in_salon})";
	}
	
	public function getQualSchoolText() {
		$qualSchoolOptions=$this->qualSchoolOptions;
		return isset($qualSchoolOptions[$this->qualification_school]) ? $qualSchoolOptionsOptions[$this->qualification_school] : "unknown qualification ({$this->qualification_school})";
	}
	
	public function getQualHairText() {
		$qualHairOptions=$this->qualHairOptions;
		return isset($qualHairOptions[$this->qualification_hair]) ? $qualHairOptions[$this->qualification_hair] : "unknown qualification ({$this->qualification_hair})";
	}
}






