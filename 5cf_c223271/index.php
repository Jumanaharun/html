<html>

<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<form action="data_save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td>
                    <input type="text" name="father_name" placeholder="Enter your Father's name" required>
                </td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td>
                    <input type="text" name="mother_name" placeholder="Enter your Mother's name" required>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" name="mobile" placeholder="Enter your mobile" required>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" placeholder="Enter your Email" required>
                </td>
            </tr>
            
        </table>
        <fieldset>
            <legend>Gender:</legend>
            <label for="female">
            <input type="radio" id="female" name="gender" value="female" required>
            Female
</label>
<label for="male">
            <input type="radio" id="male" name="gender" value="male" required>
            male
</label>
<label for="other">
            <input type="radio" id="other" name="gender" value="other" required>
            other
</label>

</fieldset>
        
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Save" name="submit_button">
            </td>
        </tr>
    </form>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
/*if(isset($_POST['submit_button']))
{
    $name=trim($_POST['name']);
    $father_name=trim($_POST['father_name']);
    $mother_name=trim($_POST['mother_name']);
    $address=trim($_POST['address']);
    $mobile=trim($_POST['mobile']);
    $email=trim($_POST['email']);
    $gender=trim($_POST['gender']);
    //print_r($department);

    $connnection=mysqli_connect('localhost','root','','5cf_aut_2024');
    mysqli_query($connnection,"INSERT INTO profile(student_name,matric_no,mobile,email,department) values('$student_name','$matric_no','$mobile','$email','$department')");


}*/


include("view.php");
?>