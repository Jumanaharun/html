<?php
$host="localhost";
$user="root";
$password="";
$db="C223272_SIS ";

$data=mysqli_connect($host, $user, $password, $db);

if($data==false)
{ die("connection error"); }


>