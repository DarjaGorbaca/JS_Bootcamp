<?php

function connectToDB()
{

    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "js_practical_task";

    $con = new mysqli($hostname, $username, $password, $databasename);
    return $con;
}

function selectCustomers(mysqli $con): mysqli_result
{
    $query = "SELECT * FROM Customers";
    return $con->query($query);
}

function printHelloName(string $firstName, string $lastName)
{
    echo "<h1>Hello $firstName $lastName</h1>";
}
