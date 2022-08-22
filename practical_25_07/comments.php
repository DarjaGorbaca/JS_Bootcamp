<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$databasename = "js_practical_task";

$con = new mysqli($hostname, $username, $password, $databasename);

$success = "";
if ($con->connect_error) {
    $err = $con->connect_error;
} else {
    $query = "SELECT * FROM comments";
    $result = $con->query($query);

    if ($result->num_rows == 0) {
        $err = "NO RESULTS";
    } else {
        $entry = $result->fetch_assoc();
    }
}

include("header.php") ?>;

<bode>
    <div class="container">
        <?php while ($entry = $result->fetch_assoc()) {
            echo "<h3>ID : " . $entry["id"] . ", Comment:" . ["comment"] . "</h3>";
        }
        ?>
    </div>

</bode>