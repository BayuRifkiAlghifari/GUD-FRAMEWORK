<?php

	Class Home extends Controller
	{
		public function index()
		{
			// $this->view() untuk load view
			// $this->model() untuk load model
			// $this->libs() untuk load liblaries

			$data['app_name'] = 'Contoh';

			$this->view('home', $data);
		}
	}