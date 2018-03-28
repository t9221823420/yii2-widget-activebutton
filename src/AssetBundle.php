<?php

namespace yozh\activebutton;

class AssetBundle extends \yozh\base\AssetBundle
{

    public $sourcePath = __DIR__ .'/../assets/';

    public $css = [
        //'css/yozh-activebutton.css',
	    //['css/yozh-activebutton.print.css', 'media' => 'print'],
    ];
	
    public $js = [
        //'js/yozh-activebutton.js'
    ];
	
	public $publishOptions = [
		//'forceCopy'       => true,
	];
	
}