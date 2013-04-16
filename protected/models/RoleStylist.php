<?php

class RoleStylist extends RoleApplicant
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RoleStylist the static model class
	 */
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

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
			'adex1'  => 'Stock Control',
			'adex2' => 'Management',
			'adex3'  => 'Training/educator',
			'adex4'  => 'Reception',
			'adex5'  => 'Marketing',
			'adex6'  => 'Customer Service',
			
			'experience' => 'How many years hairdressing experience do you have? (Since qualified)',
			'current_position' => 'Which of these best describes your current level?',
			'client_base' => 'Do you have an existing client base?',
			
		);
	}
	
	protected function beforeSave()
	{
		
		if($this->isNewRecord)
			$this->salon_id=1;
			$this->role_id=4;
		
		return parent::beforeSave();
	}
		
	
	public function getPositionOptions()
	{
		return array(
			self::CHOOSE=>'--Please Choose--',
			self::POSITION_GRADUATE=>'Graduate Stylist',
			self::POSITION_STYLIST=>'Stylist',
			self::POSITION_SENIOR=>'Senior Stylist',
			//self::POSITION_TOP=>'Top Stylist',
			self::POSITION_DIRECTOR=>'Director',
		);
	}	
	
	
	public function getPositionText() {
		$positionOptions=$this->positionOptions;
		return isset($positionOptions[$this->current_position]) ? $positionOptions[$this->current_position] : "unknown position ({$this->current_position})";
	}
	
	
	
	
}






