<?php
// if (isset($_POST["myInput"])) {
//     echo ("Your input was : " . $_POST["myInput"]);
// }
?>

<html>

<?php
include("header.php");
?>
<?php include("navbar.php") ?>

<body>
    <div class="container">
        <h1>Enter the customer:</h1>
        <!-- <form method="POST" action="addCustomer.php">
            <label for="FirstName">FirstName:</label><input id="FirstName" name="FirstName">
            <label for="LastName">LastName:</label><input id="LastName" name="LastName">
            <label for="Email">E-mail:</label><input id="Email" name="Email">
            <label for="Phone">Phone:</label><input id="Phone" name="Phone" type="number">
            <button>Save</button>
        </form> -->
        <form method="POST" action="addCustomer.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputFirstName1">First Name</label>
                <input name="FirstName" type="text" class="form-control" id="exampleInputFirstName1" aria-describedby="firstnameHelp" placeholder="Enter first name">
                <small id="firstnameHelp" class="form-text text-muted">Enter First Name</small>
            </div>
            <div class="form-group">
                <label for="exampleInputLastName1">Last Name</label>
                <input name="LastName" type="text" class="form-control" id="exampleInputLastName1" aria-describedby="lastnameHelp" placeholder="Enter last name">
                <small id="lastnameHelp" class="form-text text-muted">Enter Last Name</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone1">Phone</label>
                <input type="number" class="form-control" id="exampleInputPhone1" name="Phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPhoto1">Photo</label>
                <input type="file" class="form-control" id="exampleInputPhoto1" name="photo" placeholder="Photo">
            </div>
            <div class="form-group">
                <label for="exampleInputComment1">Comment</label>
                <textarea rows="4" cols="50" class="form-control" id="exampleInputComment1" name="Comment"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
</body>

</html>