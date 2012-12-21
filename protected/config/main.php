<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Jakata Salon - Hairdressers in Warrington',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.yii-mail.*',
	),
	
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),
	
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		
		'mail' => array(
		    'class' => 'ext.yii-mail.YiiMail',
		     'transportType'=>'smtp',
		     'transportOptions'=>array(
		       'host'=>'',
		       'port'=>'25',
		       'username'=>'',
		       'password'=>'',
		       
		       
		     ),
		    'viewPath' => 'application.views.mail',
		    'logging' => true,
		    'dryRun' => false
		),			
			
		// uncomment the following to enable URLs in path-format
		
		/*
		'urlManager'=>array(
		  'urlFormat'=>'path',
		  'showScriptName' => false, 
		  'rules'=>array(
		     // custom rules go first
		     'news' => array('site/page', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'news')),
		     'news_archive' => array('site/page', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'news_archive')),
		     'offers' => array('site/page', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'offers')),
		     'prices' => array('site/page', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'prices')),
		     'recruitment' => array('site/page', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'recruitment')),
		     'details' => array('site/page', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'details')),
		     'collections' => array('site/page', 'defaultParams' => array('view' => 'collections')),
		     'company' => array('applicant/offer'),
		     'feedback' => array('bhaInput/create'),
		     'redeem' => array('applicant/create'),
		     'index' => array('site/index', 'urlSuffix'=>'.php', 'defaultParams' => array('view' => 'index')),
		     
		     // default controller url setup
		     '<controller:\w+>/<id:\d+>'=>'<controller>/view',
		     '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		     '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		     
		   ),
		 ),
		*/
		
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		// main database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'emulatePrepare' => true,
			'username' => '',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		// local database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'emulatePrepare' => true,
			'username' => '',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'info@email.com',
	),
);