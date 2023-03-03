<?php

function databaseToShelter(){
    require "dbConnector.php";
    $conn = dbConnector();
    $sql = 'SELECT Address FROM Shelters';
    $data = mysqli_query($conn, $sql);
    return $data;
}