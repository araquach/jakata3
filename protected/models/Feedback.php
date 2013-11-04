<?php

/**
 * This is the model class for table "feedback_input".
 *
 * The followings are the available columns in table 'feedback_input':
 * @property integer $id
 * @property integer $date
 * @property integer $intro
 * @property integer $consultation
 * @property integer $styling_area
 * @property integer $stylist_appearance
 * @property integer $prod_advice
 * @property integer $styling_advice
 * @property integer $mkt1
 * @property integer $mkt2
 * @property integer $mkt3
 * @property integer $value_for_money
 * @property integer $whole_experience
 * @property integer $end_result
 * @property string $extra
 * @property string $extra_edit
 * @property string $client_id
 * @property bool $allow
 * @property bool $publish
 */
class Feedback extends CActiveRecord
{
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feedback the static model class
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
		return 'feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('intro, consultation, styling_area, stylist_appearance, prod_advice, styling_advice, mkt1, mkt2, mkt3, value_for_money, whole_experience, end_result, client_id', 'required'),
			array('intro, consultation, styling_area, stylist_appearance, prod_advice, styling_advice, mkt1, mkt2, mkt3, value_for_money, whole_experience, end_result, client_id', 'numerical', 'integerOnly'=>true),
			array('publish', 'boolean'),
			array('allow', 'boolean'),
			array('client_id', 'unique', 'message'=>'Sorry - you can only enter once'),
			array('date','default','value'=>new CDbExpression('NOW()'),'setOnEmpty'=>false,'on'=>'insert'),
			array('extra', 'length', 'max'=>300),
			array('extra_edit', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, allow, date, intro, consultation, styling_area, stylist_appearance, prod_advice, styling_advice, mkt1, mkt2, mkt3, value_for_money, whole_experience, end_result, extra, extra_edit, client_id, publish', 'safe', 'on'=>'search'),
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
			'FeedbackClient' => array(self::BELONGS_TO, 'FeedbackClient', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date'=> 'Date Submitted',
			'intro' => '1. How was the introduction to your stylist? Did they make you feel welcome and comfortable?',
			'consultation' => '2. Rate the consultation on these factors: Did the stylist listen to you?  Were they understanding?  Did they offer you professional advice and differering ideas? Did you feel comfortable with them?  Did you both come to a decision on what to go for?',
			'styling_area' => '3. Rate the cleanliness of the styling station you were sat on. Use these factors to make your judgement:  Clean and clear from other peoples hair cuttings, clean shelving unit, clean mirrors, clear of clutter and tools, general cleanliness',
			'stylist_appearance' => '4. How do you rate your stylists appearance',
			'prod_advice' => '5. Rate the level of product advice given to you by your stylist.',
			'styling_advice' => '6. Rate the level of styling advice given to you by your stylist.',
			'internal_marketing' => '7. We have 3 schemes in place to save you money on your visits to the salon? Which ones were you informed about?',
			'mkt1' => 'Recommend a friend',
			'mkt2' => 'Loyalty Points',
			'mkt3' => 'Pre-booking discount',
			'value_for_money' => '8. How do you rate your stylists pricing and value for money?',
			'whole_experience' => '9. How do you rate the experience as a whole on your last visit?',
			'end_result' => '10. How happy were you with the end result of your hair?',
			'extra' => 'Do you have any extra comments you would like to make?',
			'extra_edit' => 'This is how the text will be displayed',
			'allow' => 'Please tick the box if you give permission to use your comments on our testimonials page',
			'publish' => 'Publish to website?',
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
		$criteria->compare('date',$this->date);
		$criteria->compare('intro',$this->intro);
		$criteria->compare('consultation',$this->consultation);
		$criteria->compare('styling_area',$this->styling_area);
		$criteria->compare('stylist_appearance',$this->stylist_appearance);
		$criteria->compare('prod_advice',$this->prod_advice);
		$criteria->compare('styling_advice',$this->styling_advice);
		$criteria->compare('mkt1',$this->mkt1);
		$criteria->compare('mkt2',$this->mkt2);
		$criteria->compare('mkt3',$this->mkt3);
		$criteria->compare('value_for_money',$this->value_for_money);
		$criteria->compare('whole_experience',$this->whole_experience);
		$criteria->compare('end_result',$this->end_result);
		$criteria->compare('client_id',$this->client_id);
		$criteria->compare('extra',$this->extra,true);
		$criteria->compare('extra_edit',$this->extra_edit,true);
		$criteria->compare('allow',$this->allow);
		$criteria->compare('publish',$this->allow);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	public function score()
	{
		$a = $this->intro;
		$b = $this->consultation;
		$c = $this->styling_area;
		$d = $this->stylist_appearance;
		$e = $this->prod_advice;
		$f = $this->styling_advice;
		$g = $this->mkt1;
		$h = $this->mkt2;
		$i = $this->mkt3;
		$j = $this->value_for_money;
		$k = $this->whole_experience;
		$l = $this->end_result;
		
		$score = $a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l;
		
		return $score;
	}
	
	public function beforeSave() 
	{
		if($this->isNewRecord)
		
		$this->extra_edit = $this->extra;
		
		return parent::beforeSave();
	}
	
	
}