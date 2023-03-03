<?php


require "shelters.php";

session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        default :
            lost();
    }
} else {
    home();
}