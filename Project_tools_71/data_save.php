<?php

include("database_connect.php");

if(isset($_POST['create']))
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$desc = $_POST['description'];

	$newvar= "INSERT INTO books (Title, Author, Genre, Description) values ('$title', '$author', '$genre', '$desc' )"
}

?>