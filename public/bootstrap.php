<?php

function getAutoload($className)
{
	$classCrambs = explode('\\', $className);

	if($classCrambs[0] == 'app'){
		require __DIR__ 
		. '/../' 
		. implode(DIRECTORY_SEPARATOR, $classCrambs) 
		. '.php';
	}

	if($classCrambs[0] == 'box'){
		require __DIR__ 
		. '/../vendor/' 
		. implode(DIRECTORY_SEPARATOR, $classCrambs) 
		. '.php';
	}
}

spl_autoload_register('getAutoload', true, true);