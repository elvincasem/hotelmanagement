<?php
require 'include/db_connection.php';

	$conn = dbConnect();
	$stmt = $conn->prepare("select userName as label, status as data from users");
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//print_r($rows);
	echo json_encode($rows);

?>