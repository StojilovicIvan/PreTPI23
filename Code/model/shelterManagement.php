<?php

require "data/dbConnector.php";
function databaseToShelter(){
    $query = selectData();
    return $query;
}
