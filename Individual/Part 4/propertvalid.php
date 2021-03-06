<?php
    #Author: Mikhail Shaw
    include "controller/MainController.php";
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: /property.php");
    }
    session_start();
    $_SESSION["PropType"] = $_POST["PropType"];
    $_SESSION["LandSize"] = $_POST["LandSize"];
    $_SESSION["BuildType"] = $_POST["BuildType"];
    $_SESSION["BedRooms"] = $_POST["BedRooms"];
    $_SESSION["BathRooms"] = $_POST["BathRooms"];
    $_SESSION["price"] = $_POST["price"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Property Validation";
        include "partials/head.php";
    ?>
</head>
<body>
    <div class="BGblur"></div> <!-- Just The Background, nuh too pree it-->
    <main class="ValMain">
        <div>
            <table>
                <tr><td><label>Property Type</label></td><td><label><?php echo $_POST["PropType"]; ?></label></td></tr>
                <tr><td><label>Size of Land </label></td><td><label><?php echo $_POST["LandSize"]. " km"; ?></label></td></tr>
                <tr><td><label>Building Type</label></td><td><label><?php echo $_POST["BuildType"]; ?></label></td></tr>
                <tr><td><label># of Bedrooms</label></td><td><label><?php echo $_POST["BedRooms"];?></label></td></tr>
                <tr><td><label># of Bathrooms</label></td><td><label><?php echo $_POST["BathRooms"];?></label></td></tr>
                <tr><td><label>Price of Property</label></td><td><label><?php echo "$".$_POST["price"]; ?></label></td></tr>
            </table>
            <a href="location.php">Next</a>
        </div>
        
    </main>
</body>
</html>