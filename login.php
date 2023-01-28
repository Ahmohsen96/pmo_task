<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/auth.css" />
</head>

<body>
    <?php
    require 'Auth.php';
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = trim($_REQUEST['username']);    // removes backslashes
        $password = trim($_REQUEST['password']);
        $req = ['username' => $username, 'password' => md5($password)];
        $auth->login($req);
    } else {
    ?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
        <input type="password" class="login-input" name="password" placeholder="Password" />
        <input type="submit" value="Login" name="submit" class="login-button" />
        <p class="link"><a href="registration.php">New Registration</a></p>
    </form>
    <?php
    }
    ?>
</body>

</html>