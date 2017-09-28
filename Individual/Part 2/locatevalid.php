<?php
    #Author: Mikhail Shaw
    include "controller/MainController.php";
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: /location.php");
    }
    session_start();
    $_SESSION["Saddr1"] = $_POST["Saddr1"];
    $_SESSION["Saddr2"] = $_POST["Saddr2"];
    $_SESSION["city"] = $_POST["city"];
    $_SESSION["parish"] = $_POST["parish"];
    $_SESSION["country"] = $_POST["country"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Location Validation";
        include "partials/head.php";
    ?>
</head>
<body>
    <div class="BGblur"></div> <!-- Just The Background, nuh too pree it-->
    <main class="ValMain">
        <div>
            <table>
                <tr><td><label>Street Address 1</label></td><td><label><?php echo $_POST["Saddr1"]; ?></label></td></tr>
                <tr><td><label>Street Address 2 </label></td><td><label><?php echo $_POST["Saddr2"]; ?></label></td></tr>
                <tr><td><label>City </label></td><td><label><?php echo $_POST["city"]; ?></label></td></tr>
                <tr><td><label>Parish</label></td><td><label><?php echo $_POST["parish"]; ?></label></td></tr>
                <tr><td><label>Country</label></td><td><label><?php echo $_POST["country"]; ?></label></td></tr>
            </table>
            <a href="registerProperty.php">Done</a>
        </div>
        
    </main>
</body>
</html>