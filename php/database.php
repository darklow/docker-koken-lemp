<?php
	$DB_ENV = parse_url(getenv('DATABASE_URL'));

	$KOKEN_DATABASE = array(
		'driver' => 'mysqli',
		'hostname' => $DB_ENV['host'],
		'database' => trim($DB_ENV['path'], '/'),
		'username' => $DB_ENV['user'],
		'password' => $DB_ENV['pass'],
		'prefix' => 'koken_',
		'socket' => ''
	);