<?php
require 'DB.php';

class Auth
{
    public function registration($request)
    {
        global $conn;
        $query = "INSERT INTO users (";
        foreach ($request as $req => $val) {
            $query .= "`$req`" . ',';
        }
        $query = rtrim($query, ',');
        $query .= ") VALUES (";
        foreach ($request as $req => $val) {
            $query .= "'$val'" . ',';
        }
        $query = rtrim($query, ',');
        $query .= ")";
        $result = $conn->prepare($query);
        $result->execute();
        if ($result) {
            $_SESSION['username'] = $request['username'];
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                      <h3>Required fields are missing.</h3><br/>
                      <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                      </div>";
        }
    }
    public function login($request)
    {
        global $conn;
        $query = 'SELECT * From users where';
        foreach ($request as $key => $val) {
            $query .= "`$key` = '$val' " . '&&';
        }
        $query = rtrim($query, '&&');
        $result = $conn->prepare($query);
        $result->execute();

        if (isset($result)) {
            $_SESSION['username'] = $request['username'];
            header("Location: index.php");
        } else {
            echo "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
            </div>";
        }
    }
}

$auth = new Auth();