<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
	'controllers' => array(
		'invokables' => array(
			'Test\Controller\Test' => 'Test\Controller\TestController',
		),
	),
	// The following section is new and should be added to your file
	'router' => array(
		'routes' => array(
			'test' => array(
				'type' => 'segment',
				'options' => array(
					'route' => '/test',
					'constraints' => array(
					),
					'defaults' => array(
						'controller' => 'Test\Controller\Test',
						'action' => 'index',
					),
				),
			),
		),
	),
	'view_manager' => array(
		'template_path_stack' => array(
			'test' => __DIR__ . '/../view',
		)
	),
);
