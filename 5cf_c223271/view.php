<html>

<head>

</head>

<body>
    <?php 
    include("db_connect.php");
    $result=mysqli_query($connnection,"SELECT * FROM registration");
    //echo '<pre>';
    //print_r($result);?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Father's name</td>
            <td>Mother's name</td>
            <td>Address</td>
            <td>Mobile</td>
            <td>Email</td>
            <td>Gender</td>
            
        </tr>

    
    <?php
    while($row=mysqli_fetch_array($result))
    {
       // echo '<pre>';
    //print_r($row);
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Father_Name']?></td>
        <td><?php echo $row['Mother_Name']?></td>
        <td><?php echo $row['Address']?></td>
        <td><?php echo $row['Mobile']?></td>
        <td><?php echo $row['Email']?></td>
        <td><?php echo $row['Gender']?></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>

</html>