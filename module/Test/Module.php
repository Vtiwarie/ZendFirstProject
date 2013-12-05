<?php

namespace Test;

class Module
{

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\ClassMapAutoloader' => array(
				__DIR__ . '/autoload_classmap.php',
			),
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				),
			),
		);
	}

	// getAutoloaderConfig() and getConfig() methods here
	// Add this method:
	public function getServiceConfig()
	{
		return array(
			'factories' => array(
				'Test\Model\TestTable' => function($sm)
		{
			$tableGateway = $sm->get('TestTableGateway');
			$table = new TestTable($tableGateway);
			return $table;
		},
				'TestTableGateway' => function ($sm)
		{
			$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
			$resultSetPrototype = new ResultSet();
			$resultSetPrototype->setArrayObjectPrototype(new Test());
			return new TableGateway('test', $dbAdapter, null, $resultSetPrototype);
		},
			),
		);
	}

}
