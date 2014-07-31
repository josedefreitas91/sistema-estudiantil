<?php

class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Postgres',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'jose',
		'password' => 'jose',
		'database' => 'sea',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
        
        public $auditoria = array(
		'datasource' => 'Database/Postgres',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'jose',
		'password' => 'jose',
		'database' => 'sea',
                'schema' => 'auditoria',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
        
        public $seguridad = array(
		'datasource' => 'Database/Postgres',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'jose',
		'password' => 'jose',
		'database' => 'sea',
                'schema' => 'seguridad',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
