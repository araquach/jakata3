
<?php

class KebeloController extends Controller
{

	/**
		 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
		 * using two-column layout. See 'protected/views/layouts/column2.php'.
		 */
		public $layout='//layouts/main';
	
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
					'actions'=>array('index', 'offer', 'prize'),
					'users'=>array('*'),
				),
				
				array('deny',  // deny all users
					'users'=>array('*'),
				),
			);
		}
	
	/**
	 * Show main page
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
	
	
	/**
	 * Show offer page
	 */
	public function actionPrize($id)
	{
		$this->render('prize',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	/**
	 * Show silk page
	 */
	public function actionSilk()
	{
		$this->render('silk');
	}
	
	/**
	 * Show Q&A page
	 */
	public function actionQuestions()
	{
		$this->render('questions');
	}
	
	
	
	public function loadModel($id)
	{
		$model=Kebelo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
}	