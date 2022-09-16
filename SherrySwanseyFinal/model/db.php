<?php
	$ini=parse_ini_file(__DIR__.'/dbconfig.ini');

	try{
		$db = new PDO(
			"mysql:host=" .$ini['servername'].
			";port=" .$ini['port'].
			";dbname=" .$ini['dbname'],
			$ini['username'],
			'password',
			array(
				PDO::MYSQL_ATTR_SSL_KEY => __DIR__.'/my-keypair.ppk',
				PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
			));
			
	
	
		$db-> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	catch(PDOException $e){
		echo "There was an unexpected error connecting to the database. Please try again later.";
	}
	
    

