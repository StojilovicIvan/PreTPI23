<?php

function home(){
    require "model/shelterManagement.php";
    $shelters = databaseToShelter();
    require "view/home.php";
}

function add(){
    require "model/shelterManagement.php";

}

