<?php
include './students.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color : red ;
        }
        .black {
            color : black ;
        }
    </style>
</head>
<body>
    <p>Application Name :PHP class registeration</p>
    <table>
        <thead>
            <tr><th>Name </th> <th>Email </th> <th>Track</th></tr>
        </thead>
        <tbody><?php for ($i = 0; $i < count($students);$i++) { ?>
            <tr class = "<?php echo ($students[$i]['track'] == "CMS") ? "red" : "black"?>">
                <td><?php echo $students[$i]['name'] ?></td>
                <td><?php echo $students[$i]['email']  ?></td>
                <td><?php echo $students[$i]['track'] ?></td>
            </tr>
        <?php } ?></tbody>
    </table>
</body>
</html>