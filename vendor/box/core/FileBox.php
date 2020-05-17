<?php

namespace box\core;


class FileBox extends AbstractBox
{
	// protected $file;

	public function setData($key, $value)
	{
		if (file_exists($this->getFilePath()))
		{
			$data = $this->getJsonData();

			$data[$key] = $value;

			$data = $this->makeJson($data);

			$this->writeData($data);
		}
		else
		{
			$data = $this->makeJson([$key => $value]);

			$this->writeData($data);
		}
	}

	protected function writeData($data)
	{
		file_put_contents(
			$this->getFilePath(),
			$data,
		);
	}


	public function getData ($key)
	{
		if (file_exists($this->getFilePath()))
		{
			$data = $this->getJsonData();

			var_dump($data[$key]);
		}
		else
		{
			echo 'Нет записанных данных';
		}
		
	}

	protected function getJsonData()
	{
		return json_decode(
			file_get_contents($this->getFilePath()),
			true
		);
	}

	protected function makeJson($data)
	{
		return json_encode($data);
	}

	protected function getFilePath()
	{
		return __DIR__ . '/../../../storage/' . 'log.txt';
	}
}
