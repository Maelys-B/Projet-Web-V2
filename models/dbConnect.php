<?php
$dbConfig = [
	'db_sgbd' => 'mysql',
	'db_host' => 'localhost',
	'db_name' => 'galerie_lampes',
	'db_username' => 'root',
	'db_password' => ''
];

$db = new PDO(
	$dbConfig['db_sgbd'] . ":host=" . $dbConfig['db_host'] . ";dbname=" . $dbConfig['db_name'] . ";charset=utf8",
	$dbConfig['db_username'],
	$dbConfig['db_password']
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);