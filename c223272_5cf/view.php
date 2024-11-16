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
            <td>Father_name</td>
            <td>Mother_name</td>
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
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Father_name']?></td>
        <td><?php echo $row['Mother_name']?></td>
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