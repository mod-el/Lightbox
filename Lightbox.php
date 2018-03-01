<?php namespace Model\Lightbox;

use Model\Core\Module;

class Lightbox extends Module
{
	/**
	 * @param array $options
	 * @throws \Model\Core\Exception
	 */
	public function init(array $options)
	{
		if (!$this->model->isLoaded('JQuery'))
			$this->model->load('JQuery');
	}
}
