<?php
	include 'vendor/autoload.php';
	include 'config/credentials.php';

	use Illuminate\Database\Capsule\Manager as Caspule;

	$capsule = new Caspule();
	$conn_array = array(
		"driver" => "mysql",
		"host" => $db_host,
		"database" => $db_name,
		"username" => $db_user,
		"password" => $db_pass,
		"charset" => "utf8",
		"collation" => "utf8_general_ci",
		"prefix" => ""
	);
	$capsule->addConnection($conn_array);

	$capsule->bootEloquent();