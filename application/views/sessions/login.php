<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="<?= site_url('learnsession/loginproses') ?>" method="post">
        <input type="text" placeholder="username" name="username">
        <br><input type="password" placeholder="pasword" name="password">
        <br><input type="submit" value="Login">
    </form>
</body>

</html>