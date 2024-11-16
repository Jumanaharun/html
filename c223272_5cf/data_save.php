<?php 
//echo "Inside data_save.php";
//echo '<pre>';
//print_r($_POST);
include("db_connect.php");


//mysqli_connect("server_name","user_name","password","database_name");
$name=$_POST['name'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$gender=$_POST['gender'];

//echo $department;
mysqli_query($connnection,"INSERT INTO registration (Name,Father_name, Mother_name, Address, Mobile, Email, Gender) values('$name', '$father_name', '$mother_name', '$address', '$mobile','$email', '$gender')");
