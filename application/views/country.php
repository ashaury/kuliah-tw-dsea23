<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    Hello Codeigniter Framework!
    <table>
        <tr>
            <th>Kode</th>
            <th>Negara</th>
            <th>Benua</th>
            <th>Populasi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?= $row['Code'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Continent'] ?></td>
                <td><?= $row['Population'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>