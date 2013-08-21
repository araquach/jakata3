<?php

/**
 * This is the model class for table "feedback_client".
 *
 * The followings are the available columns in table 'feedback_client':
 * @property integer $id
 * @property integer $iris_id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 */
class FeedbackClient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FeedbackClient the static model class
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
		return 'feedback_client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iris_id, first_name, last_name, mobile', 'required'),
			array('iris_id', 'numerical', 'integerOnly'=>true),
			array('first_name', 'length', 'max'=>30),
			array('last_name', 'length', 'max'=>40),
			array('mobile', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, iris_id, first_name, last_name, mobile', 'safe', 'on'=>'search'),
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
			'iris_id' => 'Iris',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'mobile' => 'Mobile',
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
		$criteria->compare('iris_id',$this->iris_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('mobile',$this->mobile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}