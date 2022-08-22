<?php
include("header.php")
?>

<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$databasename = "js_practical_task";

$con = new mysqli($hostname, $username, $password, $databasename);

$err = "";
$entry = [];

if ($con->connect_error) {
    $err = $con->connect_error;
}

$sql = "SELECT * FROM Customers";
if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>First Name</th>";
        echo "<th>Last name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "</thead>";
        echo "</tr>";
        while ($entry = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $entry['id'] . "</td>";
            echo "<td>" . $entry['firstname'] . "</td>";
            echo "<td>" . $entry['lastname'] . "</td>";
            echo "<td>" . $entry['email'] . "</td>";
            echo "<td>" . $entry['phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    $err = $con->error;
}

mysqli_close($con);
?>
</body>

</html>