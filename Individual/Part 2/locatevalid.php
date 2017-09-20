<?php
    include "controller/MainController.php";
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: /location.php");
    }
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
    <main class="ValMain">
        <div>
            <table>
                <tr><td><label>Street Address 1</label></td><td><label><?php echo $_POST["Saddr1"]; ?></label></td></tr>
                <tr><td><label>Street Address 2 </label></td><td><label><?php echo $_POST["Saddr2"]; ?></label></td></tr>
                <tr><td><label>City </label></td><td><label><?php echo $_POST["city"]; ?></label></td></tr>
                <tr><td><label>Parish</label></td><td><label><?php echo $_POST["parish"]; ?></label></td></tr>
                <tr><td><label>Country</label></td><td><label><?php echo $_POST["country"]; ?></label></td></tr>
            </table>
            <a href="/">Done</a>
        </div>
        
    </main>
</body>
</html>