<?php
    include "controller/MainController.php";
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: /register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Register Validation";
        include "partials/head.php";
    ?>
</head>
<body>
    <main class="ValMain">
        <div>
            <table>
                <tr><td><label>First name</label></td><td><label><?php echo $_POST["fname"]; ?></label></td></tr>
                <tr><td><label>Middle name </label></td><td><label><?php echo $_POST["mname"]; ?></label></td></tr>
                <tr><td><label>Last name</label></td><td><label><?php echo $_POST["lname"]; ?></label></td></tr>
                <tr><td><label>Telephone 1</label></td><td><label><?php echo $_POST["tel1"]; ?></label></td></tr>
                <tr><td><label>Telephone 2</label></td><td><label><?php echo $_POST["tel2"]; ?></label></td></tr>
                <tr><td><label>Email</label></td><td><label><?php echo $_POST["email"]; ?></label></td></tr>
                <tr><td><label>Trn</label></td><td><label><?php echo $_POST["trn"]; ?></label></td></tr>
                <tr><td><label>password </label></td><td><label><?php echo $_POST["pword"]; ?></label></td></tr>
                <tr><td><label>password 2</label></td><td><label><?php echo $_POST["rpword"]; ?></label></td></tr>
            </table>
            <a href="property.php">Next</a>
        </div>
        
    </main>
</body>
</html>