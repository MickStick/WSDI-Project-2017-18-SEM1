<?php
    #Author: Mikhail Shaw
    include "controller/MainController.php";
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: /register.php");
    }

    session_start();
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["mname"] = $_POST["mname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["tel1"] = $_POST["tel1"];
    $_SESSION["tel2"] = $_POST["tel2"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["trn"] = $_POST["trn"];
    $_SESSION["pword"] = $_POST["pword"];
    $_SESSION["rpword"] = $_POST["rpword"];

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
    <div class="BGblur"></div> <!-- Just The Background, nuh too pree it-->
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
            </table>
            <a href="property.php">Next</a>
        </div>
        
    </main>
</body>
</html>