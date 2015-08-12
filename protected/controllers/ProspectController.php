<?php

class ProspectController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/prospect';

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
			array('allow',  // allow all users to only perform 'create' actions
				'actions'=>array('create', 'form_holder'),
				'users'=>array('*'),
			),
			array('allow', // allow managers to perform 'admin', 'delete', 'update' actions
				'actions'=>array('index','admin','delete','update'),
				'users'=>array('manager'),
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
		$this->render('create');
	}
	
	public function actionForm_holder()
		{
			$model=new Prospect;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Prospect']))
			{
				$model->attributes=$_POST['Prospect'];
				if($model->save())
					Yii::app()->user->setFlash('entry','<p>Thank\'s for entering ' . ucfirst($model->first_name) . '.' . '<br>We will send your free products out soon!</p>');
			}
	
			$this->render('form_holder',array(
				'model'=>$model,
			));
		}
	

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Prospect');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Prospect('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Prospect']))
			$model->attributes=$_GET['Prospect'];

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
		$model=Prospect::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='prospect-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
