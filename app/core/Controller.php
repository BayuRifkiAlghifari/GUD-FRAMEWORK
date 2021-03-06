<?php

	Class Controller
	{
		protected $models 			= '';
		protected $liblaries		= '';
		protected $contents 		= '';

		public function view($view, $data = [])
		{
			// Array key to new variable
			extract($data, EXTR_PREFIX_SAME, "wddx");

			$data 				= [];

			require_once '../app/views/' . $view . '.php';
		}

		public function model($model)
		{
			$this->models 		= ($this->models === '') ? $model : $this->models;

			$this->models 		= ucfirst($this->models);

			require_once '../app/models/' . $this->models . '.php';

			return new $this->models;
		}

		public function libs($lib)
		{
			$this->liblaries 	= ($this->liblaries === '') ? $lib : $this->liblaries;

			$this->liblaries 	= ucfirst($this->liblaries);
			
			require_once '../app/liblaries/' . $this->liblaries . '.php';

			return new $this->liblaries;
		}
	}