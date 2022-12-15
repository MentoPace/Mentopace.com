<?php
session_start();
//import database class
require '../functions.php';

//Check if it is a post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        //check if email is registered already
        $user = $db->SelectOne("SELECT * FROM users WHERE email = :email", ['email' => $_POST['email']]);

        if (!$user)
            doReturn(401, false, ["message" => "Email Address does not exist"]);

        //compare password
        if (password_verify($_POST['password'], $user['hash']) === false)
            doReturn(401, false, "You have entered an Invalid Password");
        
        $_SESSION['user_id'] = $user['user_id'];    

        doReturn(200, true, ["message" => "Login successful"]);
    } catch (Exception $e) {
        error_log($e);
        doReturn(500, false, ["message" => "A server error has occured"]);
    }
}
?>