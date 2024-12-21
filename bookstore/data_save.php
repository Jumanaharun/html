<?php

include("database_connect.php");

if(isset($_POST['create']))
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$desc = $_POST['description'];

	mysqli_query($con,"INSERT INTO books (Title, Author, Genre, Description) values ('$title', '$author', '$genre', '$desc' )") ;
	echo "Data inserted successfully";
}

?>