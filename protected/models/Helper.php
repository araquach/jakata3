<?php

/**
 * This is the model class for table "helper".
 *
 * The followings are the available columns in table 'helper':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $age
 * @property string $phone
 * @property string $email
 * @property string $hours
 * @property string $why_jakata
 */
class Helper extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Helper the static model class
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
		return 'helper';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, age, phone, email, hours, why_jakata', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, phone, email, hours, why_jakata', 'length', 'max'=>256),
			array('email', 'email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, age, phone, email, hours, why_jakata', 'safe', 'on'=>'search'),
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
			'phone' => 'Phone Number',
			'email' => 'Email Address',
			'hours' => 'Suited Hours',
			'why_jakata' => 'Why do you think this role is for you?',
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
		$criteria->compare('age',$this->age);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('hours',$this->hours,true);
		$criteria->compare('why_jakata',$this->why_jakata,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}