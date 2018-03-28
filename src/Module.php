<?php

namespace yozh\activebutton;

use yozh\base\Module as BaseModule;

class Module extends BaseModule
{

	const MODULE_ID = 'activebutton';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
