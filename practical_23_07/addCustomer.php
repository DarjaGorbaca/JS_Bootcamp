<?php

if (empty($_POST["FirstName"]) || $_POST["LastName"] === "" || $_POST["Email"] === "") {
    $err = "First name, Last name and E-mail are mandatory!";
} else {



    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "js_practical_task";

    $con = new mysqli($hostname, $username, $password, $databasename);

    if (!empty($_FILES["photo"])) {

        $extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);

        $filename = "image-" . rand(0, 1000000) . "." . $extension;
        $tempname = $_FILES["photo"]["tmp_name"];
        $folder = "./photos/" . $filename;

        move_uploaded_file($tempname, $folder);
    }

    $err = "";
    $success = "";
    if ($con->connect_error) {
        $err = $con->connect_error;
    } else {
        $query = "INSERT INTO Customers (firstname, lastname, email, phone, photo, comments)
    VALUES('" . $_POST["FirstName"] . "', '" . $_POST["LastName"] . "', '" . $_POST["Email"] . "', '" . $_POST["Phone"] . "', '" . $filename . "', '" . $_POST["Comment"] . "')";
        if ($con->query($query)) {
            $success = "Customer successfully added";
        } else {
            $err = $con->error;
        }
    }
}

?>

<html>

<head>
</head>

<body>
    <?php if ($err != "") { ?>
        <h1 style="color:red"><?= $err ?></h1>
    <?php } else { ?>
        <h1 style="color:green"><?= $success ?></h1>
    <?php } ?>
    <?php echo "<pre>";
    var_dump($_FILES);
    echo "</pre>"; ?>
</body>

</html>