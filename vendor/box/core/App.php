<?php

namespace box\core;

/**
 * Основной класс приложения
 * создает тело приложения
 *
 * return @void
 */
interface App
{

	public function setData($key, $value);


	public function getData($key);


	public function save();


	public function load();

}