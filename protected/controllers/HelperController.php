<?php

class HelperController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','update','admin','delete','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 
	public function actionCreate()
		{
			$model=new Helper;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Helper']))
			{
				$model->attributes=$_POST['Helper'];
				if($model->save())
				{
					$message = new YiiMailMessage;
					$message->setBody('There is a new Saturday Helper applicant for Jakata<br>Name: '.$model->first_name.' '.$model->last_name.'<br>Email: '.$model->email.'<br> Phone Number: '.$model->phone.'<br>http://www.jakatasalon.co.uk/helper/'.$model->id, 'text/html');
					$message->subject = 'New Saturday Staff Application';
					$message->addTo('adamcarter@jakatasalon.co.uk');
					$message->addTo('jimmy@jakatasalon.co.uk');
					$message->from = Yii::app()->params['adminEmail'];
					
					Yii::app()->mail->send($message);
					
					Yii::app()->user->setFlash('helper','Thank you for your application ' . ucfirst($model->first_name) . '.' . '<br>We will keep hold of your details and contact you shortly if we think you are suitable for the role.<br>' . 'Thanks again.');
				}
			}
			
			$this->render('create',array('model'=>$model));
		} 
	 
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Helper']))
		{
			$model->attributes=$_POST['Helper'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Helper');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Helper('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Helper']))
			$model->attributes=$_GET['Helper'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Helper::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='helper-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
