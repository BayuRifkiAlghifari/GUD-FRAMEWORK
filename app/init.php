<?php
	
	header('Access-Control-Allow-Origin: *');
	
	session_start();
	
	require_once 'core/App.php';
	require_once 'core/Controller.php';
	require_once 'core/Model.php';

	require 'helper/url.php';
	require 'helper/input.php';
	require 'config/config.php';
	require 'config/database.php';

	//Load Config, Helper or Liblaries