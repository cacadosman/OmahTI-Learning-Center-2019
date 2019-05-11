<?php
    require 'config.php';

    $loggedIn = false;

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("select * from users where username='$username'");
        $stmt->execute();

        $users = $stmt->fetchAll();

        if (count($users))
        {
            $user = $users[0];

            if ($user['password'] === $password)
            {
                $loggedIn = true;
            }
            else
            {
                echo "Username/Password Salah";
                exit();
            }
        }
        else
        {
            echo "Username/Password Salah";
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
</head>
<body>
    <?php if (!$loggedIn): ?>
        <h1>User Login</h1>
        <form action="" method="post">
            <p>Username: <input type="text" name="username"></p>
            <p>Password: <input type="password" name="password"></p>
            <p><input type="submit" value="Login"></p>
        </form>
    <?php else: ?>
        <h1>Selamat datang user</h1>
        <p>Anda berhasil login</p>
    <?php endif; ?>
</body>
</html>