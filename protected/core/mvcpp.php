<?php
/**
 * Base class for mvcpp web application
 **/
class Mvcpp
{
	public static $config;
	public $user;
	public $route;
	
	public function init($config)
	{
		require('protected/models/Site.php');
	
		self::$config = array_merge(include $config);
		spl_autoload_register( array($this, 'autoloadDomain') );
		if (isset($_GET['r'])) {
			$this->route = explode('/', trim($_GET['r'], '/'));
		}
		else
			$this->route = array(self::$config['defaultController']);
		$this->run($this->route);
	}
	private function run($route)
	{
		if(!isset($route[1]))
			$route[1] = 'index';
		foreach (self::$config['controllerMap'] as $controller) {
			$file = $controller.ucfirst($route[0]).'Controller.php';
			if(file_exists($file)){
				require($file);
				$className = $route[0].'Controller';
				call_user_func_array(array(new $className , $route[1]), array());
				return;
			}
		}
		throw new Exception('There are no such controllers, so you shall get a 404 for that.', 404);
	}
	public static function log($text){
		if($this->log == file)
		{
			$f = fopen('protected/runtime/application.log', 'a');
			fputs($f, $text);
			fclose($f);
		}
	}

    public static function autoloadDomain($className) {
	    $path = self::$config['import'];
	    foreach ($path as $folder) {
		if(file_exists($folder.$className.'.php')){
		    require_once($folder.$className.'.php');
		    return true;
		}       
	    }
        self::throwFileNotFoundException($className);
    }

    public static function throwFileNotFoundException($class)
    {
        throw new Exception($class. ' not found here.');
    }
}
class SPLAutoLoader{

    public static function autoloadDomain($className, $path) {
	    $path = array('protected/classes/');
	    foreach ($path as $folder) {
		if(file_exists($folder.$className.'.php')){
		    require_once($folder.$className.'.php');
		    return true;
		}       
	    }
        self::throwFileNotFoundException($className);
    }

    public static function throwFileNotFoundException($class)
    {
        throw new Exception($class. ' not found here.');
    }

} //end class
