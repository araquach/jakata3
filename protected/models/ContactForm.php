<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $first_name;
	public $second_name;
	public $email;
	public $email_confirm;
	public $mobile;
	public $body;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('first_name, second_name, email, mobile, body', 'required', 'message'=>'Please enter your {attribute}'),
			array('email_confirm', 'required', 'message'=>'Please confirm your Email Address'),
			array('email_confirm', 'compare', 'compareAttribute'=>'email'),
			array('mobile', 'numerical', 'message'=>'Please enter your mobile number without spaces'),
			// email has to be a valid email address
			array('email', 'email', 'message'=>'Please enter a valid email address'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'first_name' => 'First Name',
			'second_name' => 'Second Name',
			'email' => 'Email Address',
			'email_confirm' => 'Confirm Email Address',
			'mobile' => 'Contact Number',
			'body' => 'Your Message',
			
		);
	}
	
}