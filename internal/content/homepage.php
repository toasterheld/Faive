<?php
    require_once "../internal/sidebar.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faive | Das Familien-HQ</title>
    <link rel="icon" href="assets/logos/faive_transparent.ico">
    <link rel="stylesheet" href="css/import.css">
</head>
<body>
    <section class="dashboard_content">
        <div class="date"><img src="../assets/svg/icons/calendar.png"><span class="fill_date"></span></div>
        <div class="todo_container">
            <div class="sphere"></div>
            <div class="tile_text">
                <span>zugeteilte Aufgaben</span>
                <p class="tile_fact">1204</p>
            </div>
        </div>
        <div class="event_container">
            <div class="sphere"><span class="material-symbols-outlined">calendar_month</span></div>
            <div class="tile_text">
                <span>nächstes Event</span>
                <p class="tile_fact">12. April</p>
            </div>
        </div>
        <div class="money_container">
            <div class="sphere"></div>
            <div class="tile_text">
                <span>verfügbares Geld</span>
                <p class="tile_fact">12.043€</p>
            </div>
        </div>
        <a href="index.php?page=logout" class="logout">Abmelden</a>
    </section>
</body>
</html>