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
    $comment = "There is \r\n the comment";
    $query = "INSERT INTO comments (comment)
VALUES('" . $comment . "', )";
    if ($con->query($query)) {
        $success = "Customer successfully added";
    } else {
        $err = $con->error;
    }
}


include("header.php");
?>

<?php
const CONSTANT_TEST = "test";

$var = "There is the variable";
echo (["<h1> Here is the text</h1>", "<h2>Here is another text</h2>"]);
include("header.php");

if ($var === "232") {

    $var2 = "another text";
}

if (!isset($_COOKIE["color"])) {
    setcookie("color", "red");
} else {
    echo "<h1>The color is " . $_COOKIE["color"] . "</h1>";
}

$vari = "112a";

$intval = intval($vari);
$res = $intval + 5;

$res++;

echo $res++;
echo ++$res;
echo $res;

$boolval = true;
$boolval = false;

$arr[0] = "value 1";
$arr["key"] = "value 2";

echo $arr[0];
echo $arr["key"];

$text_part1 = 'Darja';
$text_full = "$text_part1 Gorbaca";
echo $text_full;

$arr2 = [];

$arr2[] = "Element1"; //goes to key 0
$arr2[] = "Element2"; //goes to key 1
$arr2[] = "Element3"; //goes to key 2

$res = $arr2[0] <> $arr2[1];
$res = $arr2[0] !== $arr2[1];

echo "<br>", $arr2[0], $arr2[1], $arr2[2], "<br>";

echo 1 == "1"; //prints 1 (true)
echo "<br>";
echo 1 === "1"; // prints space (false)

echo 1 == "1" ? "true" : "false"; //prints 1 (true)
echo "<br>";
echo 1 === "1" ? "true" : "false"; // prints space (false)
?>



<body>
    <?php
    include("navbar.php");
    ?>

    <p><?= "Here is the text \n and here is continues" ?></p>
    <?= "<h1>Here is the text</h1>" ?>
    <?= $var . $nd ?> //display first part but trigger the warning after that
    <?= $var2 ?>

    <?php
    foreach ($arr2 as $key => $value) {
        echo "<h1>Key : " . $key . ", Value : " . $value . " </h1>";
    }
    ?>
</body>