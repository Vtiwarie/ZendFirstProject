<?php

namespace Test\Controller;


class TestController extends \Zend\Mvc\Controller\AbstractActionController
{
	
	public function __construct()
	{
		echo 'my constructor';
		if(is_callable("parent::__construct"))
		{
			parent::__construct();
		}
	}
	public function indexAction()
	{
		$this->layout('layout/default');
		
	}
}