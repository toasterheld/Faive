<?php
    require_once "../database/import.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faive | Das Familien-HQ</title>
    <link rel="icon" href="../assets/logos/faive_transparent.ico">
    <link rel="stylesheet" href="../css/import.css">
    <script src="../js/Dashboard.js"></script>
</head>
<body>
    <nav>
        <div class="nav_head">
            <img class="profile_picture" src="../assets/pictures/reviews/placeholder.png">
            <h1><?php echo(getUsernameById($_SESSION["userid"])); ?></h1>
            <p><?php echo(getRoleById($_SESSION["userid"])); ?></p>
        </div>
        <div class="nav_links">
            <span class="<?php if($_GET["page"] == "dashboard") echo "active"; ?>"><img src="../assets/svg/icons/home.svg"><a href="index.php?page=dashboard">Dashboard</a></span>
            <span><img src="../assets/svg/icons/task.svg">Aufgaben</span>
            <span><img src="../assets/svg/icons/calendar.svg">Termine</span>
            <?php
        switch(getRoleById($_SESSION["userid"])) {
            case "Superadministrator*in":
            case "Administrator*in":
                echo("<span class='" . ($_GET["page"] == 'admin' ? 'active' : '') . "'><img src='../assets/svg/icons/calendar.svg'><a href='index.php?page=admin'>Admin</a></span>");
                break;
        }
    ?>
        </div>
    </nav>
    <?php
        switch($_GET["page"]) {
            case "dashboard":
                require_once("content/homepage.php");
                break;
            case "admin":
                require_once("content/admin.php");
                break;
        }
    ?>
</body>

<style>
    html, body {
        height: 100%;
    }
    nav {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 20%;
        height: 100%;
        background-color: #f7f7f7;
    }

    .nav_head {
        display: flex;
        flex-direction: column;
        text-align: center;

        padding: 50px;
    }

    .nav_head > h1 {
        font-size: 32px;
        margin-bottom: 0;
    }

    .profile_picture {
        width: 200px;
        height: 200px;
        border-radius: 100%;

        object-fit: cover;
    }

    .nav_links {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 20px;
    }

    .nav_links > span {
        display: flex;
        align-items: center;
        justify-content: flex-start;

        width: 80%;
        height: 65px;
        padding-left: 10%;
        transition: 0.3s;

        font-size: 20px;
        color: #7a807e;
        font-weight: 100;
    }

    .nav_links > span:not(.active):hover {
        background-color: #fefefe;
        border-radius: 20px;
    }

    .active {
        background-color: #2aaf74;
        color: #ffffff !important;
        font-weight: 800 !important;
        box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
        border-radius: 20px;
    }
</style>