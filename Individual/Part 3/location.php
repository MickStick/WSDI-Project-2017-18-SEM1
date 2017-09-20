<?php
    include "controller/MainController.php";
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
    <main class="RegMain">
        <form action="locatevalid.php" method="post">
            <label>Location</label>
            <table>
                <tr><td><input  name="Saddr1" type="text" placeholder="Street Address 1"></td></tr>
                <tr><td><input name="Saddr2" type="text" placeholder="Street Address 2"></td></tr>
                <tr><td><input  name="city" type="text" placeholder="City"></td></tr>
                <tr><td><input  name="parish" type="text" placeholder="Parish"></td></tr>
                <tr><td><input  name="country" type="text" placeholder="Country"></td></tr>
            </table>
            <button type="submit">Finished</button>
        </form>
        
    </main>
</body>
</html>