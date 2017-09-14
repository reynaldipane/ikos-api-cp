<?php

function getDB() {
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="ikos-db";
	
	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	return $connection;
	
}