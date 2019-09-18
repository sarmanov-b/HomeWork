<?php

$mysqli = new mysqli('localhost', 'root', '', 'berik') or die(mysql_error($mysqli));

if (isset($_POST['save'])) {
	# code...
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];

	$mysqli->query("INSERT INTO data (id, name, surname, email) VALUES('$id', '$name', '$surname', '$email')") or die($mysqli->error);
}


if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query ("DELETE FROM data WHERE id =$id") or die($mysqli->error());


}
