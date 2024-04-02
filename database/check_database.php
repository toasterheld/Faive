<?php
    function checkLogin($username, $password) {
        global $db;

        $data = $db->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc();
        if($data == NULL) {
            return false;
        }

        if ($data["password"] =! $password) {
            return false;
        } else {
            return true;
        }
    }

    function checkRegister($username, $first_name, $last_name, $email, $password) {
        global $db;

        if($username == "" || $first_name == "" || $last_name == "" || $email == "" || $password == "") {
            return false;
        }

        $data = $db->query("SELECT * FROM users WHERE username = '$username'")->fetch_assoc();
        if($data != NULL) {
            return false;
        }

        $data = $db->query("SELECT * FROM users WHERE email = '$email'")->fetch_assoc();
        if($data != NULL) {
            return false;
        }

        $db->query("INSERT INTO users (username, first_name, last_name, email, password, role) VALUES ('$username', '$first_name', '$last_name', '$email', '$password', 2)");

        return true;
    }
?>