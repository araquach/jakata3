<?php

/**
 * This is the model class for table "competition".
 *
 * The followings are the available columns in table 'competition':
 * @property integer $id
 * @property string $first_name
 * @property string $second_name
 * @property string $mobile
 * @property string $email
 * @property integer $answer
 * @property integer $date_entered
 * @property integer $regular
 */
class Competition extends CActiveRecord
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
		return 'competition';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, second_name, mobile, email, answer', 'required'),
			array('first_name, second_name, email', 'length', 'max'=>256),
			array('date_entered','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			array('mobile', 'length', 'max'=>22),
			array('mobile', 'numerical', 'integerOnly'=>true, 'message'=>'Please enter your mobile number without any spaces'),
			array('regular', 'boolean'),
			array('email', 'email', 'message'=>'Please give a valid email address'),
			array('email, mobile', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, second_name, mobile, email, answer, date_entered, regular', 'safe', 'on'=>'search'),
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
			'mobile' => 'Mobile Number',
			'email' => 'Email Address',
			'answer' => 'Please select your answer',
			'date_entered' => 'Date Entered',
			'regular' => 'Check the box if you have been to the salon before',
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
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('answer',$this->answer);
		$criteria->compare('date_entered',$this->date_entered);
		$criteria->compare('regular',$this->regular);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}