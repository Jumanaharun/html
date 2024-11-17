<html>

<head>

</head>

<body>
    <?php 
    include("db_connect.php");
    $result=mysqli_query($connnection,"SELECT * FROM STUDENTS");
    //echo '<pre>';
    //print_r($result);?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Mobile</td>
            <td>Department</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

    
    <?php
    while($row=mysqli_fetch_array($result))
    {
       // echo '<pre>';
    //print_r($row);
    $id=$row['ID'];
    ?>
    <tr>
        <td><?php echo $row['ID']?></td>
        <td><?php echo $row['Name']?></td>
        <td><?php echo $row['Mobile']?></td>
        <td><?php echo $row['Department']?></td>
        <td>
            <a href="edit.php?id=<?php echo  $id?>">Edit</a>
        </td>
        <td>
            <a href="delete.php?id=<?php echo  $id?>">Delete</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>

</html>