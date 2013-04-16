<?php

class RoleApprenticeController extends Controller
{

	/**
		 * @return array action filters
		 */
		public function filters()
		{
			return array(
				'accessControl', // perform access control for CRUD operations
				'postOnly + delete', // we only allow deletion via POST request
			);
		}
	
		/**
		 * Specifies the access control rules.
		 * This method is used by the 'accessControl' filter.
		 * @return array access control rules
		 */
		public function accessRules()
		{
			return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
					'actions'=>array('create'),
					'users'=>array('*'),
				),
			
				array('deny',  // deny all users
					'users'=>array('*'),
				),
			);
		}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
		{
			$model=new RoleApprentice;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['RoleApprentice']))
			{
				$model->attributes=$_POST['RoleApprentice'];
				if($model->save())
					{
					$message = new YiiMailMessage;
					$message->setBody('There is a new apprentice applicant for Jakata.<br>Name: '.$model->first_name.' '.$model->second_name.'<br>Age: '.$model->age.'<br>Email: '.$model->email.'<br>Mobile: '.$model->mobile.'<br>http://www.jakatasalon.co.uk/apprentice/'.$model->apprentice_id, 'text/html');
					$message->subject = 'New Apprentice Application';
					//$message->addTo('adamcarter@jakatasalon.co.uk');
					//$message->addTo('jimmy@jakatasalon.co.uk');
					$message->from = Yii::app()->params['adminEmail'];
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('apprentice','Thank you for your application ' . ucfirst($model->first_name) . '.' . '<br>We will keep hold of your details and contact you as soon as a position becomes available.<br>' . 'Thanks again.');
					}
				
				}
				$this->render('create',array('model'=>$model));
			}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=RoleApprentice::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='roleApprentice-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
