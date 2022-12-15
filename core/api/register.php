<?php
session_start();
//import database class
require '../functions.php';
//Check if it is a post request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        //check if email is registered already
        $users = $db->SelectAll("SELECT * FROM users WHERE email = :email", ['email' => $_POST['email']]);

        if (count($users))
            doReturn(400, false, ["message" => "A user with this Email exists already"]);

        //hash password
        $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
        $uid = md5(time().$_POST['email']);
        //save to database
        $insert = $db->Insert("INSERT INTO users (user_id, acc_type, uname, email, hash, date_joined) VALUES (:uid, :type, :uname, :email, :hash, :date)", ['uid' => $uid, 'type' => $_POST['type'], 'uname' => $_POST['uname'], 'email' => $_POST['email'], 'hash' => $pass, 'date' => time()]);
        // //set user id
        // $_SESSION['user_id'] = $uid;
        //return success
        doReturn(200, true, ["message" => "Registration Successful"]);

    } catch (Exception $e) {
        error_log($e);
        doReturn(500, false, ["message" => "A server error has occured"]);
    }
}
?>