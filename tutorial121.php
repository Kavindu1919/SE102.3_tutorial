<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Registration Form - Output</h1>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $_POST['first_name']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $_POST['last_name']; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo $_POST['username']; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $_POST['password']; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $_POST['gender']; ?></td>
        </tr>
        <tr>
            <td>Academic Year</td>
            <td><?php echo $_POST['academic_year']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <td>Phone No</td>
            <td><?php echo $_POST['phone_no']; ?></td>
        </tr>
    </table>
</body>
</html>
