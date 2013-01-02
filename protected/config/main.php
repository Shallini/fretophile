<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Fretophile Site',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
	),

	'defaultController'=>'site',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class' => 'WebUser',
		),
		'image'=>array(
          'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
            'params'=>array('directory'=>'/opt/local/bin'),
        ),
		/* 'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		), */
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fretophile',
			'emulatePrepare' => true,
			'username' => 'impinge',
			'password' => 'admin',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				/* 'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>', */
				'gii'=>'gii',
				'gii/<controller:\w+>'=>'gii/<controller>',
				'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
			),
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
		'widgetFactory'=>array(
            'widgets'=>array(               
                'SAImageDisplayer'=>array(
                    'baseDir' => 'images',
                    'originalFolderName'=> 'originals',
                    'sizes' =>array(
                        'tiny' => array('width' => 40, 'height' => 30),
                        'big' => array('width' => 640, 'height' => 480),
                        'thumb' => array('width' => 400, 'height' => 300),
                    ),
                    'groups' => array(
                        'news' => array(
                            'tiny' => array('width' => 40, 'height' => 30),
                            'big' => array('width' => 640, 'height' => 480),
                          ),
						  'avatars' => array(
						    'big' => array('width' => 180, 'height' => 120),
						    'thumb' => array('width' => 90, 'height' => 90),
                            'tiny' => array('width' => 40, 'height' => 40),                            
                          ),
						  'instruments' => array(
						    'big' => array('width' => 180, 'height' => 120),
						    'thumb' => array('width' => 90, 'height' => 90),
                            'tiny' => array('width' => 40, 'height' => 40),                            
                          ),
                        'reviews' => array(
                            'thumb' => array('width' => 400, 'height' => 300),
                         ), 
                    ),
                ),
            ),
        ),
    ),
	

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
	
	//using Gii
	/* 'modules'=>array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            //'password'=>'pick up a password here',
            // 'ipFilters'=>array(...a list of IPs...),
            // 'newFileMode'=>0666,
            // 'newDirMode'=>0777,
        ),
    ),
	
	'gii'=>array(
         
         'generatorPaths'=>array(
             'application.gii'
         ),
       
    ), */
);