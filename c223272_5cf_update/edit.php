<html>

<head>

</head>

<body>
    <?php
    // print_r($_GET);
    // print_r($_GET['id']);
    $id = $_GET['id'];
    include("db_connect.php");
    $result = mysqli_query($connnection, "SELECT * FROM students WHERE id='$id'");
    // print_r($result);
    $row = mysqli_fetch_array($result);
    // echo '<pre>';
    // print_r($row);
    ?>
    <form action="data_update.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input name="name" value="<?php echo $row['Name'] ?>" id="nameId">
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input name="mobile" value="<?php echo $row['Mobile'] ?>" id="mobileId">
                </td>
            </tr>
            <tr>
                <td>Department</td>
                <td>
                    <select name="department" id="departmentId">
                        <option <?php echo  $row['Department'] == 'CSE' ? "selected" : "" ?>>CSE</option>
                        <option <?php echo  $row['Department'] == 'EEE' ? "selected" : "" ?>>EEE</option>
                        <option <?php echo  $row['Department'] == 'ME' ? "selected" : "" ?>>ME</option>
                        <option <?php echo  $row['Department'] == 'CE' ? "selected" : "" ?>>CE</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>


</body>

</html>