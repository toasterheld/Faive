<?php
    function getIdByName($username) {
        global $db;

        $data = $db->query("SELECT uid FROM users WHERE username = '$username'")->fetch_assoc();
        if($data == NULL) {
            return false;
        }

        return $data["uid"];
    }

    function getUsernameById($id) {
        global $db;

        $data = $db->query("SELECT username FROM users WHERE uid = '$id'")->fetch_assoc();
        if($data == NULL) {
            return false;
        }

        return $data["username"];
    }

    function getRoleById($id) {
        global $db;

        $data = $db->query("SELECT role FROM users WHERE uid = '$id'")->fetch_assoc();
        if($data == NULL) {
            return false;
        }

        switch($data["role"]) {
            case 2:
                return "Benutzer*in";
                break;
            case 1:
                return "Administrator*in";
                break;
            case 0:
                return "Superadministrator*in";
                break;
        }

        return $data["role"];
    }
?>