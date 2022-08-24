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
} else {

    if (!empty($_GET["search"]) && is_numeric($_GET["search"])) {


        $id = $_GET["search"];
        $query = "SELECT * FROM Customers WHERE id = $id";
        $result = $con->query($query);

        if ($result->num_rows == 0) {
            $err = "NO RESULTS";
        } else {
            $entry = $result->fetch_assoc();
        }
    }
}
?>

<html>

<?php
include("header.php");
?>
<?php include("navbar.php") ?>
<br>
<form action="" method="GET">
    <div class="input-group">
        <div class="form-outline">
            <input style="margin-left:20px" name="search" type="search" placeholder="Search..." id="form1" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form>

<body>
    <div class="container">
        <?php if ($err == "") { ?>
            <h3>First name: <?php echo $entry["firstname"] ?></h3><br>
            <h3>Last name: <?php echo $entry["lastname"] ?></h3><br>
            <h3>Email: <?php echo $entry["email"] ?></h3><br>
            <h3>Phone: <?php echo $entry["phone"] ?></h3><br>
            <?php if (!is_null($entry["photo"])) { ?>
                <img style="height:200px;" src="photos/<?php echo $entry["photo"]; ?>"><br>
            <?php } ?>
            <?php if (!is_null($entry["comments"])) { ?>
                <h3>Comment: <?php echo $entry["comments"]; ?></h3>
        <?php }
        } ?>
        <h1><?php if (!empty($err)) {
                echo $err;
            } ?></h1>
    </div>
</body>

</html>