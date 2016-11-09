<?php

	require_once 'classes.php';

	$publications = array();

	$con = mysqli_connect("localhost", "root", "", "testsite");
	mysqli_set_charset($con, "utf8");

	if(mysqli_connect_errno()) {

		echo "Failed to connect to MySQL: ". mysqli_connect_error();

	}

	$result = mysqli_query( $con, "SELECT * FROM publication");

	//получаем доступ к каждой выбранной записи
	while ($row = mysqli_fetch_array($result) ) {
		$publications[] = new $row['type']($row);
	}
