<html>

<head>
    <title> Registration </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-image: images.jpg;
            background-size: cover;
            background-position:center;
            font-family:Georgia, serif;

        }
    </style>
</head>


<body>
    <form action="data_save.php" method="post" >

        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" id="name"  required>
                </td>
            </tr>
            <tr>
                <td>Father_name</td>
                <td>
                    <input type="text" name="father_name" id="father_name" required>
                </td>
            </tr>
            <tr>
                <td>Mother_name</td>
                <td> <input type="text" name="mother_name" id="mother_name" required></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" name="address" id="address" required></td>
            </tr>

            <tr>
                <td>Mobile</td>
                <td><input name="mobile" id="mobile" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>