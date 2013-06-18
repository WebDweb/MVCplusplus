<?php
/**
 * The default site controller
 **/
class SiteController extends BaseController
{
	public $layout = 'column1';
	public $access = array(
		'index' => array(
			'user' => array('isGuest' => true, 'username'=>'admin'),
			'returnUrl'=>'page/index'
		),
		'login' => array('user' => array('isGuest' => true), 'returnRoute'=>array('site','index')),
	);

	public function __construct($id)
	{
		parent::__construct($id);
	}

	public function index()
	{
		$this->render('index');
	}
	public function login()
	{
		$this->render('login');
	}
}
?>
