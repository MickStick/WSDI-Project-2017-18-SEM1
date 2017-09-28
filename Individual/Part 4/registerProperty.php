<?php
    #Author: Mikhail Shaw
    session_start();
    if(!isset($_SESSION["city"])){
        header("location:location.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "All Info";
        include "partials/head.php";
    ?>
</head>
<body>
    <div class="BGblur"></div> <!-- Just The Background, nuh too pree it-->
    <main id="AllMain" class="ValMain">
        <div id="regTable" class="TableDiv">
            <label> Personal Info</label>
            <table id="pageInfo">
                <tr><td><label>First name</label></td><td><label><?php echo $_SESSION["fname"]; ?></label></td></tr>
                <tr><td><label>Middle name </label></td><td><label><?php echo $_SESSION["mname"]; ?></label></td></tr>
                <tr><td><label>Last name</label></td><td><label><?php echo $_SESSION["lname"]; ?></label></td></tr>
                <tr><td><label>Telephone 1</label></td><td><label><?php echo $_SESSION["tel1"]; ?></label></td></tr>
                <tr><td><label>Telephone 2</label></td><td><label><?php echo $_SESSION["tel2"]; ?></label></td></tr>
                <tr><td><label>Email</label></td><td><label><?php echo $_SESSION["email"]; ?></label></td></tr>
                <tr><td><label>TRN</label></td><td><label><?php echo $_SESSION["trn"]; ?></label></td></tr>
            </table>
        </div>
        <div id="propTable" class="TableDiv">
            <label> Property Info</label>
            <table id="pageInfo">
                <tr><td><label>Property Type</label></td><td><label><?php echo $_SESSION["PropType"]; ?></label></td></tr>
                <tr><td><label>Size of Land </label></td><td><label><?php echo $_SESSION["LandSize"]. " km"; ?></label></td></tr>
                <tr><td><label>Building Type</label></td><td><label><?php echo $_SESSION["BuildType"]; ?></label></td></tr>
                <tr><td><label># of Bedrooms</label></td><td><label><?php echo $_SESSION["BedRooms"];?></label></td></tr>
                <tr><td><label># of Bathrooms</label></td><td><label><?php echo $_SESSION["BathRooms"];?></label></td></tr>
                <tr><td><label>Price of Property</label></td><td><label><?php echo "$".$_SESSION["price"]; ?></label></td></tr>
            </table>
        </div>
        <div id="locTable" class="TableDiv">
            <label> Location Info</label>
            <table id="pageInfo">
                <tr><td><label>Street Address 1</label></td><td><label><?php echo $_SESSION["Saddr1"]; ?></label></td></tr>
                <tr><td><label>Street Address 2 </label></td><td><label><?php echo $_SESSION["Saddr2"]; ?></label></td></tr>
                <tr><td><label>City </label></td><td><label><?php echo $_SESSION["city"]; ?></label></td></tr>
                <tr><td><label>Parish</label></td><td><label><?php echo $_SESSION["parish"]; ?></label></td></tr>
                <tr><td><label>Country</label></td><td><label><?php echo $_SESSION["country"]; ?></label></td></tr>
            </table>
            <a href="/">El Fin</a>
        </div>
    </main>
</body>
</html>
