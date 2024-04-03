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
            <span class="active"><img src="../assets/svg/icons/home.svg">Dashboard</span>
            <span><img src="../assets/svg/icons/task.svg">Aufgaben</span>
            <span><img src="../assets/svg/icons/calendar.svg">Termine</span>
            <?php
        switch(getRoleById($_SESSION["userid"])) {
            case "Superadministrator*in":
                echo("<span><img src='../assets/svg/icons/calendar.svg'><a href='index.php?page=admin'>Admin</a></span>");
                break;
            case "Administrator*in":
                echo("<span><img src='../assets/svg/icons/calendar.svg'><a href='index.php?page=admin'>Admin</a></span>");
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