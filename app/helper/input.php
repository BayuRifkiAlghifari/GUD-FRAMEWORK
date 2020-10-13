<?php

	function post($post)
	{
		return $_POST[$post];
	}

	function get($get)
	{
		return $_GET[$get];
	}

	function sess($sess)
	{
		return $_SESSION[$sess];
	}

	function set_session($data = [])
	{
		foreach($data as $name => $value)
		{
			$_SESSION[$name] 	= $value;
		}

		return $data;
	}