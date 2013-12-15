<?php

class OfferController extends Controller
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
					'actions'=>array('index'),
					'users'=>array('*'),
				),
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
					'actions'=>array('admin','delete','index','update','view'),
					'users'=>array('manager'),
				),
				array('deny',  // deny all users
					'users'=>array('*'),
				),
			);
		}
	
	
	public function actionIndex($id)
	{
		$model=$this->loadModel($id);
		
		if(isset($_POST['Offer']))
		{
			$model->attributes=$_POST['Offer'];
	
			if($model->save())
			{
				if($model->optout == '1')
				{
					Yii::app()->user->setFlash('Offer','Thank\'s for letting us know '.ucfirst($model->first_name).' - you will no longer receive text offers from us.');
				} else {
					$message = new YiiMailMessage;
						$message->view = 'offer_email';
						$message->setBody(array('model'=>$model), 'text');
						$message->subject = 'PaulKemp';
						$message->addTo($model->mobile.'@smsid.textapp.net');
						$message->from = ('enquiries@jakatasalon.co.uk');
						
						Yii::app()->mail->send($message);
					
						Yii::app()->user->setFlash('Offer','Your text voucher will arrive shortly. We look forward to seeing you in the salon soon ' . ucfirst($model->first_name) . '!');
				}
				
			}
		
		}
		$this->render('index',array(
			'model'=>$model,
		));
	}
	
	public function actionOfferEmail()
	{
		$this->render('//mail/offer_email',array('model'=>$model));
	}
	
	
	public function loadModel($id)
	{
		$model=Offer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
}