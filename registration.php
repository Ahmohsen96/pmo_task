<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="css/auth.css" />
</head>

<body>
    <?php
    require 'Auth.php';
    session_start();

    if (isset($_REQUEST['username'])) {

        $username = trim($_REQUEST['username']);
        $email    = trim($_REQUEST['email']);
        $password = trim(md5($_REQUEST['password']));
        $create_datetime = trim(date("Y-m-d H:i:s"));


        $request = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'create_datetime' => $create_datetime
        ];

        $auth->registration($request);
    } else {
    ?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
    <?php
    }
    ?>
</body>

</html>