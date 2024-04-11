<?php
    session_start();
    require_once("../database/import.php");

    if(!isset($_GET["page"])) {
        header("Location: index.php?page=login");
    }

    if($_GET["page"] == "login" && isset($_GET["action"])) {
        if(checkLogin($_POST["username"], $_POST["password"])) {
            $_SESSION["userid"] = getIdByName($_POST["username"]);
            header("Location: " . "index.php?page=dashboard");
        } else {
            header("Location: " . "index.php?page=login");
        }
    }

    if($_GET["page"] == "register" && isset($_GET["newUser"])) {
        if(checkRegister($_POST["username"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["password"])) {
            $_SESSION["userid"] = getIdByName($_POST["username"]);
            header("Location: " . "index.php?page=dashboard");
        } else {
            header("Location: " . "index.php?page=register");
        }
    }

    if(!isset($_SESSION["userid"])) {
        switch($_GET["page"]) {
            case "register":
                require_once("../doors/RegisterPage.php");
                break;
            case "login":
                require_once("../doors/LoginPage.php");
                break;
            default:
                require_once("../error/404.php");
                break;
        }
     } else {
            switch ($_GET["page"]) {
                case "dashboard":
                    require_once("../internal/content/homepage.php");
                    break;
                case "logout":
                    require_once("../logout.php");
                    break;
                case "admin":
                    require_once("../internal/content/admin.php");
                    break;
                default:
                    require_once("../error/404.php");
                    break;
            }
        }
?>