<?php namespace Model\Lightbox;

use Model\Core\Module;

class Lightbox extends Module
{
	public function init(array $options)
	{
		\Model\Assets\Assets::enable('jquery');
	}
}
