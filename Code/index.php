<?php


session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            require "controler/shelters.php";
            home();
            break;
        case 'login' :
            require "controler/users.php";
            login($_POST);
            break;
        case 'add' :
            require "controler/shelters.php";
            add();
            break;
        default :
            require "controler/shelters.php";
            home();
    }
} else {
    require "controler/shelters.php";
    home();
}