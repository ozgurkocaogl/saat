<?php
ob_start();
session_start();

try {
	$db = new PDO("mysql:host=localhost;dbname=saat;charset=utf8", "root", "");
	//echo "BASARILI";
} catch ( PDOException $e ){
	print $e->getMessage();
	exit;
}




