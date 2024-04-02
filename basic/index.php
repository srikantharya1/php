<?php include('dbcon.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $result = mysqli_query($connection, "SELECT * FROM `students`");
            if (!$result) die("query Failed: " . mysqli_error());
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['first_name'] ?></td>
                    <td><?= $row['last_name'] ?></td>
                    <td><?= $row['age'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>