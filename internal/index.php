<?php
    session_start();
    require_once("./database/config.php");

    if(!isset($_GET["page"])) {
        header("Location: index.php?page=login");
    }