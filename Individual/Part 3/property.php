<?php
    include "controller/MainController.php";       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Property Description";
        include "partials/head.php";
    ?>
</head>
<body>
    <main class="PropertyMain">
       
        <form action="/propertvalid.php" method="post">
            <label>Property Description</label>
            <table>
                <!--<tr><td><label for="PropType">Property Type</label></td></tr>-->
                <tr><td><select name="PropType">
                    <option value="title">**Property Type**</option>
                    <option value="Vacant Lot">Vacant Lot</option>
                    <option value="Residential">Residential</option>
                    <option value="Commercial">Commercial</option>
                </select></td></tr>
                <tr><td><input name="LandSize" type="text" placeholder="Size Of Land (km)"></td></tr>
                <!--<tr><td><label for="BuildType">Building Type</label></td></tr>-->
                <tr><td><select name="BuildType">
                    <option value="title">**Building Type**</option>
                    <option value="N/A">N/A</option>
                    <option value="Farm Land">Farm Land</option>
                    <option value="Housing">Housing</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Town House">Town House</option>
                    <option value="Plaza">Plaza</option>
                    <option value="Office Space">Office Space</option>
                    <option value="Other">Other</option>
                </select></td></tr>
                <!--<tr><td><label for="BedRooms">Number of Bedrooms</label></td></tr>-->
                <tr><td><select name="BedRooms">
                    <option value="1">**Number of Bedrooms**</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3+</option>
                </select></td></tr>                
                <!--<tr><td><label for="Bathrooms">Number of Bathrooms</label></td></tr>-->
                <tr><td><select name="BathRooms">
                    <option value="title">**Number of Bathrooms**</option>
                    <option value="1">1</option>
                    <option value="2">1 1/2</option>
                    <option value="3">2</option>
                    <option value="3">3+</option>
                </select></td></tr>   
                <tr><td><input  name="price" type="number" placeholder="($) Property Price"></td></tr>
            </table>
            <button type="submit">Next</button>
        </form>
        
    </main>
</body>
</html>