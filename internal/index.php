<?php
    session_start();
    // require_once("database.php");

    if(!isset($_GET["page"])) {
        header("Location: index.php?page=login");
    }