<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display Books</title>
</head>
<body>
	<h1>List of Books</h1>
	<p>Want to add a new book?</p>
	<a href="create.php">Click here</a>
</body>
</html>


<?php 

incude('database_connect');

// initiate a new var to get data form the table of database where * means all
$getdatafromtable = mysqli_query("SELECT * FROM books");

 ?>