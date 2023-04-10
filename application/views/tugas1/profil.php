<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nama ?></title>
</head>
<body>
    <img src="<?php echo $url ?>" >
    <h4><?= strtoupper($nama); ?></h4>
    <table>
        <tr>
            <td>Kelas</td><td><?=$kelas?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?=$alamat?></td>
        </tr>
        <tr>
            <td>Email</td><td><?=$email?></td>
        </tr>
        <tr>
            <td>Telp</td><td><?=$telp?></td>
        </tr>
    </table>
</body>
</html>