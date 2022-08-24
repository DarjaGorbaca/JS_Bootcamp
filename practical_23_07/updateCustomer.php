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
        echo "<th>Action</th>";
        echo "</thead>";
        echo "</tr>";
        while ($customer = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $customer['id'] . "</td>";
            echo "<td>" . $customer['firstname'] . "</td>";
            echo "<td>" . $customer['lastname'] . "</td>";
            echo "<td>" . $customer['email'] . "</td>";
            echo "<td>" . $customer['phone'] . "</td>";
            echo "<td>" . "<a href='edit.php?id=<?php echo $customer['id'] ?>'
            class='link-dark'><i class='fa-solid fa-pen-to-square'></i></a>";
            echo "<td>" . "<a href='delete.php?id=<?php echo $customer['id'] ?>' class='link-dark'><i class='fa-solid fa-trash fs-5'></i></a>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
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