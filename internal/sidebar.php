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
            <span><span class="material-icons-round">settings</span>Einstellungen</span>
        </div>
        <div class="profile_card">
            <div class="card_content">
                <img src="../assets/pictures/placeholder.png">
                <div class="user_data">
                    <span><?php echo(getUsernameById($_SESSION["userid"])); ?></span>
                    <p><?php echo(getRoleById($_SESSION["userid"])); ?></p>
                </div>
            </div>
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
        width: 16%;
        height: 100%;
        background-color: #f7f7f7;
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

        width: 85%;
        height: 35px;
        transition: 0.3s;

        font-size: 16px;
        font-weight: 500;

        border: 1px solid black;
        border-radius: 10px;
    }

    .nav_links > span > *:first-child {
        margin-left: 20px;
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

    .profile_card {
        width: 100%;
        height: 80px;

        display: flex;
        align-items: center;
    }

    .card_content {
        width: 100%;
        padding: 20px;
        margin: 20px;

        border: 2px solid #F1F0F0;
        background-color: #ffffff;
        border-radius: 20px;

        display: flex;
    }

    .card_content > img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user_data {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;

        margin-left: 20px;
    }

    .user_data > span {
        font-weight: bolder;
        font-size: 18px;
        color: #013a28;
    }

    .user_data > p {
        font-size: 12px;
        color: #7a807e;
    }
</style>