<?php include ('dbcon2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>S.No.</tr>
            <tr>Name</tr>
            <tr>Mail Address</tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($connection, "SELECT * FROM `users`");
            if(!$result){
                die("failed" . mysqli_connect_error());
            }
            while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                </tr>
           <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>