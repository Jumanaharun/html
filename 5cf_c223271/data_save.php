<?php 
//echo "Inside data_save.php";
//echo '<pre>';
//print_r($_POST);
include("db_connect.php");


//mysqli_connect("server_name","user_name","password","database_name");
//if(isset($_POST['mid_tools']))
{
$name=trim($_POST['name']);
$father_name=trim($_POST['father_name']);
$mother_name=trim($_POST['mother_name']);
$address=trim($_POST['address']);
$mobile=trim($_POST['mobile']);
$email=trim($_POST['email']);
$gender=trim($_POST['gender']);


//echo $department;
$connnection=mysqli_connect('localhost','root','','5cf_c223271');
mysqli_query($connnection,"INSERT INTO registration (Name,Father_Name, Mother_Name,Address,Mobile,Email,Gender) values('$name','$father_name','$mother_name','$address','$mobile','$email','$gender')");

}