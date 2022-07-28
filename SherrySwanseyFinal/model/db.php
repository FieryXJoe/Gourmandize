<?php
	$ini=parse_ini_file(__DIR__.'/dbconfig.ini');

	$db = new PDO(
		"mysql:host=" .$ini['servername'].
		";port=" .$ini['port'].
		";dbname=" .$ini['dbname'],
		$ini['username'],
        array(
			PDO::MYSQL_ATTR_SSL_KEY => __DIR__.'/my-keypair.ppk'
		));
        


    $db-> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    

