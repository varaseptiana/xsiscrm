<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Xsis CRM',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
		'application.modules.user.components.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
		'application.extensions.CAdvancedArBehavior',
	),

	'modules'=>array(
		'gii'=>array(
		    'class'=>'system.gii.GiiModule',
			'password'=>'adminxsis',
		    // If removed, Gii defaults to localhost only. Edit carefully to taste.
		    'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array('application.gii'),
		),
		'rights'=>array(
			'install'=>false,
		),
		'message' => array(
			'userModel' => 'Users',
			'getNameMethod' => 'getFullName',
			'getSuggestMethod' => 'getSuggest',
			'viewPath' => '/message/fancy',
		),
		'user'=>array(
			# encrypting method (php hash function)
			'hash' => 'md5',
			# send activation email
			'sendActivationMail' => true,
			# allow access for non-activated users
			'loginNotActiv' => false,
			# activate user on registration (only sendActivationMail = false)
			'activeAfterRegister' => false,
			# automatically login from registration
			'autoLogin' => true,
			# registration path
			'registrationUrl' => array('/user/registration'),
			# recovery password path
			'recoveryUrl' => array('/user/recovery'),
			# login form path
			'loginUrl' => array('/site/login'),
			# page after login
			'returnUrl' => array('/site/index'),
			# page after logout
			'returnLogoutUrl' => array('/user/login'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			'class'=>'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('/site/login'),
		),

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'authManager'=>array(
			'class'=>'RDbAuthManager',
			'connectionID'=>'db',
			'defaultRoles'=>array('Authenticated', 'Guest'),
		),
		/*
		// uncomment the following to use a sqlite database
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
        // Comment the following to use a sqlite database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=xsiscrm',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
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
			//	array(
			//		'class'=>'CWebLogRoute',
			//	),
			),
		),
	),

	'theme'=>'tlm',

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'companyName'=>'PT XSIS Mitra Utama',
		'maxTotalAnswerOptions'=>5,
		'maxQuestionCharDisplay'=>200,
	),
);