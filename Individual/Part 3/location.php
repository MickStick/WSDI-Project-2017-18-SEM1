<?php
    include "controller/MainController.php";
    $icon = "
    <svg fill=\"rgba(240,240,240,0.7)\" height=\"24\" viewBox=\"0 0 24 24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/>
        <path d=\"M0 0h24v24H0z\" fill=\"none\"/>
    </svg>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Property Location";
        include "partials/head.php";
    ?>
</head>
<body>
    <div class="BGblur"></div> <!-- Just The Background, nuh too pree it-->
    <main class="RegMain" id="LocMain">
        <form action="locatevalid.php" method="post">
            <label>Location <?php echo $icon;?></label>
            <table>
                <tr><td><input  name="Saddr1" type="text" placeholder="Street Address 1"></td></tr>
                <tr><td><input name="Saddr2" type="text" placeholder="Street Address 2"></td></tr>
                <tr><td><input  name="city" type="text" placeholder="City"></td></tr>
                <tr><td><input  name="parish" type="text" placeholder="Parish"></td></tr>
                <tr><td><input  name="country" type="text" placeholder="Country"></td></tr>
            </table>
            <button type="submit" id="locBtn">Next</button>
        </form>
        
    </main>
</body>
</html>