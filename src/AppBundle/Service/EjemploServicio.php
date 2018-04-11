<?php

	namespace AppBundle\Service;

	class EjemploServicio
	{

		private $name;

		function __construct($name)
		{
			$this->name = $name;
		}

		public function holaServicio()
		{
			return "hola ".$this->name;
		}
	}

	/**
	 *
	 */

 ?>
