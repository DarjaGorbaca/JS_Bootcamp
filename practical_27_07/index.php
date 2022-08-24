<?php
include("db_utils.php");
include("ui_utils.php");
$con = connectToDB();
$err = "";

if ($con->connect_error) {
    $err = $con->connect_error;
}
if ($err === "")
    $result = selectCustomers($con);
?>

<head>
    <?php include("header.php") ?>
</head>

<body onload="onInit">
    <?php printHelloName("") ?>
    <div class="container">
        <b>
            <div class="row font-weight-bold">
                <div class="col">ID</div>
                <div class="col">First name</div>
                <div class="col">Last name</div>
                <div class="col">Email</div>
                <div class="col">Phone</div>
            </div>
        </b>
        <?php
        while ($entry = $result->fetch_assoc()) {
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo ($entry["id"]);
            echo "</div>";

            echo "<div class='col'>";
            echo ($entry["firstname"]);
            echo "</div>";

            echo "<div class='col'>";
            echo ($entry["lastname"]);
            echo "</div>";

            echo "<div class='col'>";
            echo ($entry["email"]);
            echo "</div>";

            echo "<div class='col'>";
            echo ($entry["phone"]);
            echo "</div>";

            echo "</div>";
        }
        ?>
    </div>
</body>